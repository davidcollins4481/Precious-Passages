dojo.addOnLoad(function() {
    var currentPage = 1;
    var search_container = dojo.query('.search-result')[0];

    var setActivePage = function() {
        dojo.query('.pagination-link').forEach(function(node) {
            dojo.removeClass(node, 'active');
        });

        dojo.addClass(dojo.byId('page-' + currentPage), 'active');
    };

    var toggleNextPrevious = function() {
        // previous links
        if (currentPage > 1) {
            dojo.removeClass(dojo.byId('previous'), "invisible");
        } else {
            dojo.addClass(dojo.byId('previous'), "invisible");
        }

        if (currentPage < pageCount) {
            dojo.removeClass(dojo.byId('next'), 'invisible');
        } else {
            dojo.addClass(dojo.byId('next'), 'invisible');
        }
    };

    var renderPage = function() {
        dojo.query('.search-result').forEach(function(row) {
            dojo.fadeOut({
                node: row,
                onEnd: function(node) {
                    dojo.addClass(node, 'hidden');
                }
            }).play();
        });

        var end   = currentPage * resultsPerPage;
        var start = end - (resultsPerPage-1);

        for (var i = start; i <= end; i++) {
            var row = dojo.byId("search-result-" + i);

            if (!row) break;

            dojo.fadeIn({
                node: row,
                onEnd: function(node) {
                    dojo.removeClass(node, 'hidden');
                }
            }).play();
        }
    };
    
    if (search_container) {
        dojo.connect(dojo.byId('previous'),"onclick", null, function(evt) {
            if (dojo.hasClass(this, "invisible")) 
                return;

            console.log('previous');
            currentPage--;
            toggleNextPrevious();
            setActivePage()
            renderPage();
        });

        dojo.connect(dojo.byId('next'),"onclick", null, function(evt) {
            if (dojo.hasClass(this, "invisible")) 
                return;

            console.log('next');
            currentPage++;
            toggleNextPrevious();
            setActivePage();
            renderPage();
        });

        var paginationLinks = dojo.query('.pagination-link');
        dojo.forEach(paginationLinks, function(link) {
            dojo.connect(link, "onclick", null, function(evt) {
                var pageNumber = parseInt(this.id.match(/\d/)[0]);
                console.log(pageNumber);
                currentPage = pageNumber;
                toggleNextPrevious();
                renderPage();
                setActivePage();
            });
        });
    }
});
