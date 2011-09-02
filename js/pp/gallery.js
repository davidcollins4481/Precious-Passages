dojo.provide("pp.gallery");

dojo.require("dojox.data.PicasaStore");
dojo.require("dijit._Widget");
dojo.require("dijit._Templated");

dojo.declare(
    "pp.gallery",
    [dijit._Widget, dijit._Templated],
    {
        templatePath: dojo.moduleUrl("pp", "templates/gallery.html"),
        selectedImage: null,
        images: [],

        startup: function() {
            var self = this;
            // this data comes from the backend. See application/views/gallery.php
            self.images = galleryImages;

            dojo.forEach(self.images, function(image) {
                self._append(image);
            });
        },

        _append: function(imageData) {
            var image = new pp.gallery.image({
                data: imageData,
                gallery: this
            });

            this.imageAttachNode.appendChild(image.domNode);
        }
    }
);

dojo.declare(
    "pp.gallery.image",
    [dijit._Widget, dijit._Templated],
    {
        templatePath: dojo.moduleUrl("pp", "templates/galleryImage.html"),
        data: null,
        gallery: null,
        selected: false,

        constructor: function(args) {
            this.gallery = args.gallery;
            this.data    = args.data;

            this.src   = this.data.src;
            this.alt   = this.data.title;
            this.thumb = this.data.thumb;
        },

        _onClick: function() {
            this._select();
        },

        select: function() {
            this.selected = true;
            dojo.addClass(this.imageNode, "selected");
        },

        deselect: function() {
            this.selected = false;
            dojo.removeClass(this.imageNode, "selected");
        }
    }
);
