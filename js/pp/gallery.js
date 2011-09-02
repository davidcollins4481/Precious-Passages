dojo.provide("pp.gallery");

dojo.require("dijit.Dialog")
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
        popup: null,

        constructor: function(args) {
            this.gallery = args.gallery;
            this.data    = args.data;

            this.src   = this.data.src;
            this.alt   = this.data.title;
            this.title = this.data.title;
            this.thumb = this.data.thumb;

            this.popup = new pp.gallery.popup({
                imageSrc: this.src,
                description: this.title
            });
        },

        _onClick: function() {
            this.popup.show();
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

// I would like to inherit directly from dijit.Dialog for this rather
// than just wrap it :)
dojo.declare(
    "pp.gallery.popup",
    [dijit._Widget, dijit._Templated],
    {
        templatePath: dojo.moduleUrl("pp", "templates/galleryPopup.html"),
        imageSrc: null,
        description: null,
        popup: null,

        constructor: function(args) {
            this.description = args.description;
            this.imageSrc    = args.imageSrc;
        },

        postMixInProperties: function() {
            this.popup = new dijit.Dialog({});
            this.inherited(arguments);
        },

        show: function() {
            this.popup.set("content", this.domNode);
            this.popup.show();
        }
    }
);
