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
             //   return;
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
});
