!function() {

    tinymce.PluginManager.add('insert_variable', function(editor, url) {        

        if (typeof ficheVariables != 'object') {
            alert('You need call "init_fiche_variables" just after "tinymce_init"')
            return
        }

        var menus = [];

        for(var key in ficheVariables) {            

            menus.push({
                text: ficheVariables[key].label,
                onclick: (function() {

                    var variable = ficheVariables[key]
                    variable.key = key;

                    return function() {                        

                        if (typeof variable.type != 'undefined') {                            
                            if (variable.type == 'list') {                                                                
                                editor.insertContent('{{' + variable.key +'|raw }}')
                            }                                                        
                        } else if (typeof variable.default == 'undefined') {
                            editor.insertContent('{{ ' + variable.key + ' }}')
                        } else {
                            editor.insertContent('<span class="special-span">' + variable.default + '</span>')
                        }                       
                    }

                })()
            })
        }

        editor.addButton('fiche_variables', {
            type: 'menubutton',
            text: 'Insérer une variable',
            icon: false,
            menu: menus
        });

        editor.addButton('editable', {
            text: 'Editable', 
            icon: false,
            onclick: function () {
                editor.insertContent('<span class="special-span">'+ editor.selection.getContent() +'</span>');
            }
        });

        editor.addButton('big_editable', {
            text: 'Big Editable', 
            icon: false,
            onclick: function () {
                editor.insertContent('<div class="big-editable">'+ editor.selection.getContent() +'</div>');
            }
        });
    })    

}()    