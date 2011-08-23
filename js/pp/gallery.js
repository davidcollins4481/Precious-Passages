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
            var image = new pp.gallery.image({
                src: "testsrc",
                alt: "testalt",
                description: "test description"
            }, this.imageAttachNode);
            
            var request = {
                query: {},
                onComplete: function(items, request) { 
                    var x = 3;
                    console.log("wapow"); 
                },
                onError: function(error, request) { console.log("error"); }
            };
            
            // images are returning...just not for my user id
            request.query.userid = 'davidcollins4481';
            
                
            var picasaStore = new dojox.data.PicasaStore();
            picasaStore.fetch(request);
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
