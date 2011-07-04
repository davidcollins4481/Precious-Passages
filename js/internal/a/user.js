dojo.require("dijit.form.Form");
dojo.require("dijit.form.Button");
dojo.require("dijit.form.ValidationTextBox");
dojo.require("dijit.form.DateTextBox");


dojo.addOnLoad(function() {
    var createUserForm = dijit.byId("create-user");
    
    dojo.connect(createUserForm, "onSubmit", function(e) {
        e.preventDefault();
        if (createUserForm.isValid()) {
            var json = dojo.toJson(createUserForm.attr("value"));
            var obj = dojo.fromJson(json);
            if (obj.password !== obj.confirm) {
                alert("passwords do not match");
                return;
            }
            
            
            var xhrArgs = {
                form: createUserForm.domNode,
                handleAs: "json",
                load: function(data) {
                    dojo.byId("response").innerHTML = "Form posted.";
                },
                error: function(error) {
                    //We'll 404 in the demo, but that's okay.  We don't have a 'postIt' service on the
                    //docs server.
                    dojo.byId("response").innerHTML = "Form posted.";
                }
            }
            //Call the asynchronous xhrPost
            dojo.byId("response").innerHTML = "Form being sent..."
            var deferred = dojo.xhrPost(xhrArgs);
        }
    });
});
