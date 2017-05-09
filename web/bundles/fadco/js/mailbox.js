!(function() {

    $(function() {
        fetchInbox();
    })    

    function fetchInbox() {
        $
            .ajax({
                type: 'GET',
                url: Routing.generate('box_mail_fetch_message', { inbox: 'inbox', type: 'sync'}),
            })
            .done(function(response) {
                console.log(response);
                if (response.status == 'ok') {
                    for (var i in response.messages) {
                        var message = response.messages[i];
                        
                    }
                }
            })
            .fail(function(error) {
                console.log(error.responseText);
            })
        ;
    }
})();