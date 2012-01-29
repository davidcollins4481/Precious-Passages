dojo.addOnLoad(function() {
    dojo.query(".jsnipImageSwitcher").forEach(function(node, index){

        var images = node.getElementsByTagName('img');//Get images contained
        var current = 0;
        var count = images.length;

        var scrollChange = function(evt) {
            old = current;
            if (current == count - 1) {
                current = 0;
            } else {
                current += 1;
            }

            dojo.addClass(images[current],'active');

            dojo.fadeOut({
                node: images[old],
                onEnd: function() {
                    images[old].style.display = 'none';
                    images[current].style.display = 'inline';
                    images[current].style.opacity = '0';
                    dojo.fadeIn({node: images[current]}).play();
                }
            }).play();
        }

        for (i = 0; i < images.length; i++) {
            if (i != 0) {
                dojo.style(images[i], {
                    display: "none"
                });
            }
        }

        var t = setInterval(scrollChange, "4000");
    });
});
