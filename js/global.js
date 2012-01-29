dojo.addOnLoad(function() {

    var nodes = dojo.query(".logo,.main-header-logo");

    nodes.forEach(function(n) {
        dojo.style(n, {
            cursor: "pointer"
        });
    });

    nodes.connect('onclick', function() {
        document.location = "/";
    });
});
