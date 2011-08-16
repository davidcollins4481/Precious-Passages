dojo.provide("pp.sidebar.navigation");
dojo.require("dijit.layout.AccordionContainer");
dojo.require("pp.form.asyncForm");
dojo.require("pp.sidebar.login");
dojo.require("pp.sidebar.userPanel");
dojo.require("dojo.data.ItemFileReadStore");
dojo.require("dijit._Widget");
dojo.require("dijit._Templated");

dojo.declare(
    "pp.sidebar.navigation",
    [dijit._Widget, dijit._Templated],
    {
        templatePath: dojo.moduleUrl("pp", "templates/navigation.html"),
        postCreate: function(args) {
            var container = this.parentContainerNode;
            dojo.parser.parse(container);
        }
    }
);
