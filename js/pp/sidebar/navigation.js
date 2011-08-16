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
            this._initMenu({
                containerNode: this.servicesNode,
                dataKey: "services"
            });

            this._initMenu({
                containerNode: this.resourcesNode,
                dataKey: "resources"
            });
        },

        _initMenu: function(args) {
            var containerNode = new dijit.layout.AccordionContainer({
                class: "submenu"
            });

            dojo.place(containerNode.domNode, args.containerNode, "first");

            // set sub-children
            var data = this.dataSource[args.dataKey];

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

                containerNode.addChild(new dijit.layout.ContentPane({
                    title: name,
                    content: content
                }));
            }

            containerNode.startup();
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
