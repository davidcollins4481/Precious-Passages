dojo.require("pp.form.asyncForm");
dojo.require("dijit.form.Form");
dojo.require("dijit.form.Button");
dojo.require("dijit.form.ValidationTextBox");
dojo.require("dijit.form.DateTextBox");
dojo.require("dijit.Editor");
dojo.require("dijit._editor.plugins.FontChoice"); // 'fontName','fontSize','formatBlock'
dojo.require("dijit._editor.plugins.TextColor");
dojo.require("dijit._editor.plugins.LinkDialog");

dojo.addOnLoad(function() {

    var editor = new dijit.Editor({
        extraPlugins: ['dijit._editor.plugins.AlwaysShowToolbar']
    },  dojo.byId('editor')); 

    var postButton = dojo.byId('submit-btn');

    var form = new pp.form.asyncForm({
        formNode: dojo.byId('form-parent'),
        messageNode: null,
        submitNode: dojo.byId('submit-btn'),
        progressNode: null,
        onValidate: function() {
            var titleNode = dojo.byId('title');

            if (!titleNode.value) {
                alert('a title is required');
                return false;
            }

            var content = editor.getValue();
            
            if (content == '<br />' || content == '') {
                alert("There's no content silly");
                return false;
            } else {
                // create new form element for content
                var entryInput = dojo.create('input', {
                    type: 'hidden',
                    name: 'entry'
                }, this.formNode);
                
                entryInput.value = encodeURIComponent(editor.getValue());
            }

            if (confirm("Do you really want to post this?")) {
                // do nothing. Keep going
                console.log("Keep going");
            } else {
                console.log("abort submit");
                return false;
            }
            
            return true;
        },
        onComplete: function(response) {
            if (response.result) {
                document.location = "/blog/index";
            }
        },
        onError: function(err) {
            // NOTE: duplicate entry titles will trip this
            alert(err);
        }
    });  

    /*
     * *** fields needed here ***
     * title
     * entry
     * 
     * *** fields generate server side
     * summary (?)
     * url_title (remove spaces in title
     * creation_date (now if it doesn't exist
     * edited_date (always now)
     * 
     */

});
