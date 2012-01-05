dojo.require("dijit.form.Form");
dojo.require("dijit.form.Button");
dojo.require("dijit.form.ValidationTextBox");
dojo.require("dijit.form.DateTextBox");

dojo.addOnLoad(function() {
    var createUserForm = dijit.byId("create-user");

    if (createUserForm) {
        var responseNode = dojo.byId("response");

        var form = new pp.form.asyncForm({
            formNode: createUserForm.domNode,
            submitNode: dojo.byId("submitNode"),
            messageNode: responseNode,
            onValidate: function() {
                var json = dojo.toJson(createUserForm.attr("value"));
                var obj = dojo.fromJson(json);
                
                if (!obj.username || !obj.password || !obj.confirm) {
                    alert("Empty fields are not allowed :(");
                    return false;
                }
                
                if (obj.password !== obj.confirm) {
                    alert("passwords do not match");
                    return false;
                }
                return true;
            },
            onComplete: function(response) {
                var className = response.success ? "success" : "error";
                // in case this isn't the first request, remove
                // previous classes
                dojo.addClass(responseNode, className);
            },
            onError: function(err) {
                console.error(err);
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

        var removeForm = new pp.form.asyncForm({
            formNode: form,
            messageNode: responseNode,
            submitNode: a,
            onComplete: function(response) {
                responseNode.className = "";// clear all classes
                var className = response.success ? "success" : "error";
                dojo.addClass(responseNode, className);
                // in case this isn't the first request, remove
                // previous classes
                if (response.success) {
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
            onError: function(err) {
                console.error(err);
                responseNode.innerHTML = 'unknown error has occurred';
            }
        });
    });
});
