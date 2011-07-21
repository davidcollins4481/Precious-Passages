dojo.provide("pp.sidebar.login");

dojo.require("dijit._Widget");
dojo.require("dijit._Templated");

dojo.declare(
    "pp.sidebar.login",
    [dijit._Widget, dijit._Templated],
    {
        templatePath: dojo.moduleUrl("pp", "templates/login.html"),
        startup: function() {
            var self = this;

            var form = new pp.form.asyncForm({
                formNode: this.formNode,
                messageNode: this.messageNode,
                submitNode: this.submitNode,
                progressNode: this.progressNode,
                onComplete: function(response) {
                    var className = response.success ? "success" : "error";
                    // in case this isn't the first request, remove
                    // previous classes
                    dojo.removeClass(self.messageNode, "success");
                    dojo.removeClass(self.messageNode, "error");

                    dojo.addClass(self.messageNode, className);

                    var userContainer = dojo.byId("user-container");
                    var data = response.data;
                    
                    if (response.success) {
                        var username = data.username;
                        // this is ugly
                        dojo.animateProperty({
                            node: userContainer,
                            properties: {
                                opacity: {
                                    end: 0
                                }
                            },
                            onEnd: function() {
                                //self.userContainer.innerHTML = "";
                                var panel = new pp.sidebar.userPanel({
                                    username: username
                                }, userContainer);
                            }
                        }).play();
                    }
                    
                },
                onError: function(err) {
                    console.error(err);
                }
            });
        }
    }
);
