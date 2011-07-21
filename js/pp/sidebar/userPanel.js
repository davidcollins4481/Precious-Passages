dojo.provide("pp.sidebar.userPanel");

dojo.require("dijit._Widget");
dojo.require("dijit._Templated");

dojo.declare(
    "pp.sidebar.userPanel",
    [dijit._Widget, dijit._Templated],
    {
        templatePath: dojo.moduleUrl("pp", "templates/userPanel.html"),
        username: null,
        constructor: function(args) {
            this.username = args.username || user.username;
        }
    }
);
