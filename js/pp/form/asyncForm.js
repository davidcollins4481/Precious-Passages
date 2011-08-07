dojo.provide("pp.form.asyncForm");

dojo.declare(
    "pp.form.asyncForm",
    null,
    {
        formNode: null,
        messageNode: null,
        submitNode: null,
        progressNode: null,
        onComplete: null,
        onValidate: null, // validate the form before submitting. return false for invalid
        onError: null,
        loading: false,

        constructor: function(args) {
            this.formNode     = args.formNode;
            this.messageNode  = args.messageNode;
            this.progressNode = args.progressNode;
            this.submitNode   = args.submitNode;

            this.onComplete = args.onComplete;
            this.onError = args.onError;
            this.onValidate = args.onValidate;
            var self = this;

            dojo.connect(this.submitNode, "onclick", function(evt) {
                evt.preventDefault();

                var valid = true;
                if (self.onValidate) {
                    valid = self.onValidate();
                    if (!valid) {
                        return false;
                    }
                }

                var xhrArgs = {
                    form: self.formNode,
                    handleAs: "json",
                    load: function(response) {
                        self._toggleLoading();
                        if (self.messageNode && response.message) {
                            self.messageNode.innerHTML = response.message;
                        }

                        self.onComplete && self.onComplete(response);
                    },
                    error: function(e) {
                        self._toggleLoading();
                        // not even sure if this is needed
                        self.onError && self.onError(e);
                    }
                };

                self._toggleLoading();
                var deferred = dojo.xhrPost(xhrArgs);
            });
        },

        _toggleLoading: function() {
            if (!this.submitNode || !this.progressNode) {
                return;
            }
            
            if (!this.loading) {
                this.loading = true;
                dojo.style(this.submitNode, {
                    display: "none"
                });
                
                dojo.style(this.progressNode, {
                    display: "block"
                });
            } else {
                this.loading = false;
                dojo.style(this.submitNode, {
                    display: "block"
                });
                
                dojo.style(this.progressNode, {
                    display: "none"
                });
            }
        }
    }
);
