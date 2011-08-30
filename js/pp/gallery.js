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
            var self = this;
            // this data comes from the backend. See application/views/gallery.php
            var images = galleryImages;

            dojo.forEach(images, function(image) {
                self._append(
                    new pp.gallery.image({
                        src: image.src,
                        alt: image.title,
                        description: 'test'
                    })
                );
            });
        },

        _append: function(image) {
            this.imageAttachNode.appendChild(image.domNode);
        }
    }
);

dojo.declare(
    "pp.gallery.image",
    [dijit._Widget, dijit._Templated],
    {
        templatePath: dojo.moduleUrl("pp", "templates/galleryImage.html"),

        startup: function() {
        }
    }
);
