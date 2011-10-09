dojo.addOnLoad(function() {

    dojo.query(".blog_entry").forEach(function(entryNode) {

        var formNode   = dojo.query(".remove-form", entryNode)[0];
        var removeLink = dojo.query(".remove-link", entryNode)[0];

        if (!formNode || !removeLink) {
            return;
        }

        var removeForm = new pp.form.asyncForm({
            formNode: formNode,
            messageNode: dojo.byId('message-container'),
            submitNode: removeLink,
            onValidate: function() {
                if (confirm("Do you really want to delete this? This can't be undone")) {
                    // do nothing. Keep going
                    console.log("Keep going");
                    return true;
                } else {
                    console.log("abort submit");
                    return false;
                }
            },
            onComplete: function(response) {
                this.messageNode.className = "";// clear all classes
                var className = response.success ? "success" : "error";
                dojo.addClass(this.messageNode, className);
                // in case this isn't the first request, remove
                // previous classes
                if (response.result) {
                    dojo.animateProperty({
                        node: entryNode,
                        properties: {
                            opacity: {
                                end: 0
                            }
                        },
                        onEnd: function() {
                            dojo.style(entryNode, {
                                display: "none"
                            });
                        }
                    }).play();

                    // fade out message after a few seconds
                    setTimeout(function() {
                        dojo.fadeOut({
                            node: 'message-container',
                            onEnd: function(n){
                                n.innerHTML = "";
                                dojo.style(n, {
                                    opacity: 1
                                });
                            },
                        }).play();
                    }, 5000);
                } else {
                    this.submitNode.innerHTML = "remove";
                }
            },
            onError: function(err) {
                console.error(err);
                this.messageNode.innerHTML = 'unknown error has occurred';
            }
        });

    });
});
