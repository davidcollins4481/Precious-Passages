dojo.provide("pp.sidebar.navigation");
dojo.require("dijit.layout.AccordionContainer");
dojo.require("dijit.layout.ContentPane");
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
        dataSource: null,

        postCreate: function() {
            this._loadDataSource();
        },

        // this is the first place you can reliably
        // access data for links.json
        init: function() {
            this._initServicesMenu();
            this._initResourcesMenu();
        },

        _initServicesMenu: function() {
            var servicesContainer = new dijit.layout.AccordionContainer({
                class: "submenu"
            });

            dojo.place(servicesContainer.domNode, this.servicesNode, "first");

            // set sub-children
            var data = this.dataSource["services"];

            for (submenu in data) {
                var name = submenu;
                var links = data[name];

                var linkify = function(l) {
                    return '<a href="' + l.url + '">' + l.name + '</a>';
                };

                var content = "";

                dojo.forEach(links, function(link) {
                    content += linkify(link);
                });

                servicesContainer.addChild(new dijit.layout.ContentPane({
                    title: name,
                    content: content
                }));
            }

            servicesContainer.startup();
        },

        _initResourcesMenu: function() {
            var resourcesContainer = new dijit.layout.AccordionContainer({
                class: "submenu"
            });

            dojo.place(resourcesContainer.domNode, this.resourcesNode, "first");

            // set sub-children
            var data = this.dataSource["resources"];

            for (submenu in data) {
                var name = submenu;
                var links = data[name];

                var linkify = function(l) {
                    return '<a href="' + l.url + '">' + l.name + '</a>';
                };

                var content = "";

                dojo.forEach(links, function(link) {
                    content += linkify(link);
                });

                resourcesContainer.addChild(new dijit.layout.ContentPane({
                    title: name,
                    content: content
                }));
            }

            resourcesContainer.startup();
        },

        _loadDataSource: function() {
            var self = this;

            dojo.xhrGet({
                url: "/js/pp/links.json",
                handleAs: "json",
                handle: function(data){
                    self.dataSource = data;
                    self.init();
                }
            });
        }
    }
);
