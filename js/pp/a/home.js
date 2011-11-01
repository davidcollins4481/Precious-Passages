dojo.addOnLoad(function() {

    var indexBuildBtn = dojo.byId("rebuild-index");
    
    dojo.connect(indexBuildBtn, 'click', function(e) {
        console.log('test');
        
        var xhrArgs = {
            url: "/admin/create_search_index",
            handleAs: "json",
            load: function(data) {
                alert(data);
            },
            error: function(error) {
                alert(error);
            }
        }

        //Call the asynchronous xhrGet
        var deferred = dojo.xhrGet(xhrArgs);
    });
    
});
