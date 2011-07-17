dojo.require("dijit.form.Form");
dojo.require("dijit.form.Button");
dojo.require("dijit.form.ValidationTextBox");
dojo.require("dijit.form.DateTextBox");

dojo.addOnLoad(function() {
    var createUserForm = dijit.byId("create-user");

    if (createUserForm) {
        dojo.connect(createUserForm, "onSubmit", function(e) {
            e.preventDefault();
            if (createUserForm.isValid()) {
                var json = dojo.toJson(createUserForm.attr("value"));
                var obj = dojo.fromJson(json);
                if (obj.password !== obj.confirm) {
                    alert("passwords do not match");
                    return;
                }

                var responseNode = dojo.byId("response");

                var xhrArgs = {
                    form: createUserForm.domNode,
                    handleAs: "json",
                    load: function(data) {
                        responseNode.className = "";// clear all classes
                        var className = !data.created ? "error" : "success";

                        dojo.addClass(responseNode, className);

                        responseNode.innerHTML = data.message;
                    },
                    error: function(e) {
                        // not even sure if this is needed
                        responseNode.innerHTML = 'unknown error has occurred';
                    }
                }
                //Call the asynchronous xhrPost
                responseNode.className = "";
                responseNode.innerHTML = "Form being sent..."
                var deferred = dojo.xhrPost(xhrArgs);
            }
        });
    }

    // delete users
    dojo.query(".useritem").forEach(function(form) {
        var a = dojo.query('.remove-link', form)[0];
        var obj = dojo.formToObject(form);
        var user_id = obj.user_id;
        var row = dojo.byId("row-" + user_id);
        var responseNode = dojo.byId("response");

        dojo.connect(a, "onclick", function(e) {
            e.preventDefault();
            console.log('removing user: ' + user_id);

            var xhrArgs = {
                form: form,
                handleAs: "json",
                load: function(data) {
                    responseNode.className = "";// clear all classes
                    var className = !data.success ? "error" : "success";

                    dojo.addClass(responseNode, className);

                    responseNode.innerHTML = data.message;
                    
                    if (data.success) {
                        dojo.animateProperty({
                            node: row,
                            properties: {
                                opacity: {
                                    end: 0
                                }
                            },
                            onEnd: function() {
                                dojo.style(row, {
                                    display: "none"
                                });
                            }
                        }).play();
                    } else {
                        a.innerHTML = "remove";
                    }
                },
                error: function(e) {
                    // not even sure if this is needed
                    responseNode.innerHTML = 'unknown error has occurred';
                }
            };

            //Call the asynchronous xhrPost
            responseNode.className = "";
            a.innerHTML = "processing";
            var deferred = dojo.xhrPost(xhrArgs);
        });
    });
});
