!function() {

    tinymce.PluginManager.add('form', function(editor, url) {        

        editor.addButton('former', {
            type: 'menubutton',
            text: 'Form',
            icon: false,
            menu: [
                {
                    text: 'Checkbox',
                    onclick: function() {
                        editor.insertContent('<input type="checkbox"></input>')
                    }
                }
            ]
        })
    })    

}()    