dojo.provide("pp.Login");

dojo.require("dijit._Widget");
dojo.require("dijit._Templated");

dojo.declare(
    "pp.Login",
    [dijit._Widget, dijit._Templated],
    {
        templatePath: dojo.moduleUrl("pp", templates/login.html
    }
);
