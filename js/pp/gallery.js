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
        maxPerPage: 16,
        currentPage: 1,

        startup: function() {
            var self = this;
            // this data comes from the backend. See application/views/gallery.php
            dojo.forEach(galleryImages, function(imageData) {
                self.images.push(
                    new pp.gallery.image({
                        data: imageData,
                        gallery: self
                    })
                )
            });

            for (var i = 0; i < self.maxPerPage; i++) {
                self._append(self.images[i]);
            }
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
            var self = this;

            this.popup = new dijit.Dialog({
                draggable: false,
                onHide: function() {
                    self._toggleModal();
                }
            });

            this.popup.closeText.innerHTML = "close";

            this.inherited(arguments);
        },

        postCreate: function() {
            this.popup.set("content", this.domNode);
        },

        show: function() {
            this._toggleModal();
            this.popup.show();
        },

        _toggleModal: function() {
            var modalNode = dojo.byId("modal-background");
            if (dojo.hasClass(modalNode, "on")) {
                dojo.removeClass(modalNode, "on");
            } else {
                dojo.addClass(modalNode, "on");
            }
        }
    }
);
