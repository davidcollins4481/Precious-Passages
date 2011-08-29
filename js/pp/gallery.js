dojo.provide("pp.gallery");

dojo.require("dojox.data.PicasaStore");
dojo.require("dijit._Widget");
dojo.require("dijit._Templated");

dojo.declare(
    "pp.gallery",
    [dijit._Widget, dijit._Templated],
    {
        templatePath: dojo.moduleUrl("pp", "templates/gallery.html"),

        startup: function() {
            console.log("startup fired");
        }
    }
);

dojo.declare(
    "pp.gallery.image",
    [dijit._Widget, dijit._Templated],
    {
        templatePath: dojo.moduleUrl("pp", "templates/galleryImage.html"),

        startup: function() {
            console.log("startup");
        }
    }
);
