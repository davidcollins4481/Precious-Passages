dojo.provide("pp.mobile.navigation");
dojo.require("pp.sidebar.navigation");
dojo.require("dijit._Widget");
dojo.require("dijit._Templated");

dojo.declare(
    "pp.mobile.navigation",
    [pp.sidebar.navigation],
    {
        templatePath: dojo.moduleUrl("pp", "templates/mobile/navigation.html"),
        dataSource: null,

        postCreate: function() {
            this._loadDataSource();
        },

        // this is the first place you can reliably
        // access data for links.json
        init: function() {
            this._initMenu({
                dataKey: "services"
            });

            this._initMenu({
                dataKey: "resources"
            });
        },

        _initMenu: function(args) {
            var data = this.dataSource[args.dataKey];
            
            var menuTitle = dojo.doc.createElement("a");
            dojo.addClass(menuTitle, "menu-item");
            menuTitle.innerHTML = args.dataKey;
            this.containerNode.appendChild(menuTitle);
            
            var ul = dojo.doc.createElement("ul");
            dojo.addClass(ul, "subnav");
            dojo.place(ul, menuTitle, "after");
            
            for (submenu in data) {
                var name = submenu;
                var links = data[name];
                
                var tempMenuTitle = dojo.doc.createElement("a");
                tempMenuTitle.innerHTML = name;
                ul.appendChild(tempMenuTitle);
                
                var tempUl = dojo.doc.createElement("ul");
                dojo.addClass(tempUl, "subnav");
                dojo.place(tempUl, tempMenuTitle, "after" );
                dojo.forEach(links, function(l) {
                    var li = dojo.doc.createElement("li");
                    li.innerHTML = l.name;
                    tempUl.appendChild(li);
                });
                console.log(name);
            }
        }
    }
);
