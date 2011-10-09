dojo.provide("pp.sidebar.login");

dojo.require("dijit._Widget");
dojo.require("dijit._Templated");

dojo.declare(
    "pp.sidebar.login",
    [dijit._Widget, dijit._Templated],
    {
        templatePath: dojo.moduleUrl("pp", "templates/login.html"),
        redirectOnLogin: true,

        startup: function() {
            var self = this;

            this._initFieldFocus();

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
                        if (self.redirectOnLogin) {
                            javascript:location.reload(true);
                        } else {
                            dojo.animateProperty({
                                node: userContainer,
                                properties: {
                                    opacity: {
                                        end: 0
                                    }
                                },
                                onEnd: function() {
                                    var panel = new pp.sidebar.userPanel({
                                        username: username
                                    }, userContainer);
                                }
                            }).play();
                        }
                    }
                },
                onError: function(err) {
                    console.error(err);
                }
            });
        },

        _initFieldFocus: function() {
            dojo.connect(this.usernameNode, 'focus', function(e) {
                this.value = '';
            });

            dojo.connect(this.usernameNode, 'blur', function(e) {
                if (this.value === '') {
                    this.value = 'Username';
                }
            });

            dojo.connect(this.passwordNode, 'focus', function(e) {
                this.value = '';
            });

            dojo.connect(this.passwordNode, 'blur', function(e) {
                if (this.value === '') {
                    this.value = 'password';
                }
            });
        }
    }
);
