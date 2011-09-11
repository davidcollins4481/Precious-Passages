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
        totalPages: 1,
        currentPage: 1,
        currentRow: null,

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

            this.totalPages = Math.ceil(this.images.length / this.maxPerPage);
            self._renderPage();

            if (self.images.length > self.maxPerPage) {
                self._initPagination();
            }
        },

        _append: function(image, newRow) {
            if (newRow) {
                this._startRow();
            }

            this.currentRow.appendChild(image.domNode);
        },

        _startRow: function() {
            this.currentRow = dojo.doc.createElement('div');
            dojo.addClass(this.currentRow, "row");
            this.imageAttachNode.appendChild(this.currentRow);
        },

        _initPagination: function() {
            dojo.style(this.paginationContainerNode, {
                "display" : "block"
            });
        },

        _onPreviousClick: function() {
            console.log("previous");
            this.currentPage--;

            if (this.currentPage <= 1) {
                this._togglePrevious();
            }

            if (this.currentPage < this.totalPages) {
                this._toggleNext();
            }

            this._renderPage();
        },

        _onNextClick: function() {
            console.log("next");
            this.currentPage++;

            if (this.currentPage >= this.totalPages) {
                this._toggleNext();
            }

            if (this.currentPage != 1) {
                this._togglePrevious();
            }

            this._renderPage();
        },

        _togglePrevious: function() {
            var hidden = dojo.hasClass(this.previousNode, "invisible");

            if (hidden) {
                dojo.removeClass(this.previousNode, "invisible");
            } else {
                dojo.addClass(this.previousNode, "invisible");
            }
        },

        _toggleNext: function() {
            var hidden = dojo.hasClass(this.nextNode, "invisible");

            if (hidden) {
                dojo.removeClass(this.nextNode, "invisible");
            } else {
                dojo.addClass(this.nextNode, "invisible");
            }
        },

        _toggleProgress: function() {
            if (dojo.hasClass(this.galleryNode, "hidden")) {
                dojo.removeClass(this.galleryNode, "hidden");
                dojo.addClass(this.progressNode, "hidden");
            } else {
                dojo.addClass(this.galleryNode, "hidden");
                dojo.removeClass(this.progressNode, "hidden");
            }
        },

        _scrub: function() {
            //dojo.addClass(this.galleryNode, "hidden");
            //dojo.removeClass(this.progressNode, "hidden");
            // i hate cleaning nodes like this!
            this.imageAttachNode.innerHTML = "";
        },

        _renderPage: function() {
            var startIndex = (this.currentPage - 1) * this.maxPerPage;
            var endIndex = (this.currentPage * this.maxPerPage) - 1;

            this._scrub();

            for (var i = startIndex; i <= endIndex; i++) {
                console.log(i);
                var newRow = false;
                if (i % 4 == 0) {
                    console.log("end previous row / start next row");
                    newRow = true;
                }

                this._append(this.images[i], newRow);
            }

            dojo.removeClass(this.galleryNode, "hidden");
            dojo.addClass(this.progressNode, "hidden");
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
