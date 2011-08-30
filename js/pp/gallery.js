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

            // intialize selected image with the first
            var selectedImage = new pp.gallery.image({
                data: self.images.shift(),
                gallery: this
            });

            self._append(selectedImage);

            dojo.forEach(self.images, function(image) {
                self._append(image);
            });

            // FIXME: this isn't fully selected when loaded (no border)
            selectedImage.select();
        },

        _append: function(imageData) {
            var image = new pp.gallery.image({
                data: imageData,
                gallery: this
            });

            this.imageAttachNode.appendChild(image.domNode);
        },

        setLargeImage: function(image) {
            this.selectedImage && this.selectedImage.deselect();
            this.selectedImage = image;

            this.selectedImageContainer.src = image.src;
            this.selectedImageContainer.alt = image.alt;
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

        _select: function() {
            this.gallery.setLargeImage(this);
            dojo.addClass(this.imageNode, "selected");
        },

        select: function() {
            this.selected = true;
            this._select();
        },

        deselect: function() {
            this.selected = false;
            dojo.removeClass(this.imageNode, "selected");
        }
    }
);
