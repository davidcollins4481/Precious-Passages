dojo.addOnLoad(function() {
    currentPage = 1;

    var renderPage = function() {
        dojo.query('.row').forEach(function(row) {
            dojo.fadeOut({
                node: row,
                onEnd: function(node) {
                    dojo.addClass(node, 'hidden');
                }
            }).play();
        });

        var end   = currentPage * imagesPerRow;
        var start = end - (imagesPerRow-1);

        for (var i = start; i <= end; i++) {
            var row = dojo.byId("row-" + i);

            if (!row) break;

            dojo.fadeIn({
                node: row,
                onEnd: function(node) {
                    dojo.removeClass(node, 'hidden');
                }
            }).play();
        }
    };

    var setActivePage = function() {
        dojo.query('.pagination-link').forEach(function(node) {
            dojo.removeClass(node, 'active');
        });

        dojo.addClass(dojo.byId('page-' + currentPage), 'active');
    };

    // handle toggles for previous/next links
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

    dojo.connect(dojo.byId('previous'),"onclick", null, function(evt) {
        console.log('previous');
        currentPage--;
        toggleNextPrevious();
        setActivePage()
        renderPage();
    });

    dojo.connect(dojo.byId('next'),"onclick", null, function(evt) {
        console.log('next');
        currentPage++;
        toggleNextPrevious();
        setActivePage();
        renderPage();
    });

    // hook up page numbers
    dojo.query('.pagination-link').forEach(function(node) {
        dojo.connect(node, "onclick", null, function(evt) {
            var pageNumber = parseInt(this.id.match(/\d/)[0]);
            currentPage = pageNumber;
            toggleNextPrevious();
            renderPage();
            setActivePage();
        });
    });
});
