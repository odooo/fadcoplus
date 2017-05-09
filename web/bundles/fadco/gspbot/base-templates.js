!function($, GspBot) {

    GspBot.initialize(function(bot) {

        bot.addTemplate({
            name: 'simple_item',
            prototype: '<div style="padding: 15px; border-bottom: 1px solid #e7e7e7">__text__</div>',
            variables: ['text']
        })

        bot.addTemplate({
            name: 'empty',
            prototype: '<div style="position: relative; height: 100%; width: 100%;"><div style="position: absolute; width: 100%; top: 50%; transform: translateY(-50%); text-align: center; font-size: 20px;">Nothing</div></div>',
        })

        bot.addTemplate({
            name: 'chat_message',
            render: function(options, bot) {
                var $template = $('<div style="position: relative;">')

                $template.append($('<div class="bot-message"></div>').html('<span class="message">'+ options.message +'</span>'))                

                return $template
            }
        })

        bot.addTemplate({
            name: 'chat_prompt',
            render: function(options, bot) {
                var $template = $('<div style="position: relative;">')
                var $input = $('<input class="form-control user-input">')                

                $template.append($('<div class="bot-message"></div>').html('<span class="message">'+ options.message +'</span>'))
                $template.append($input)

                if (IS_STRING(options.type)) {
                    switch (options.type) {
                        case 'date':
                            $input.datetimepicker({
                                widgetPositioning: {
                                    vertical: 'top',
                                },
                                format: IS_NONE(options.format) ? 'DD/MM/Y' : options.format,
                            })
                            .addClass('has-datepicker')
                            .on('dp.hide', function (e) {
                                postMessage($(this))
                            })
                            break;
                    }
                }

                $input.on('keydown', function (e) {                        
                    if (e.keyCode == 13) {
                        postMessage($(this))                    
                    }
                })

                function postMessage($el) {

                    var val = $el.val()

                    if (val != '') {
                        $el.remove()
                        $template.append($('<div class="user-message"></div>').html('<span class="message">'+ val +'</span>'))
                        bot.handleDiscussionResponse(val)                            
                    }                    
                }

                return $template
            },
            setup: function ($el) {
                var $input = $el.find('.user-input')
                if (!$input.hasClass('has-datepicker')) {
                    $input.focus()
                }                
            }
        })

        bot.addTemplate({
            name: 'chat_choice',
            render: function(options, bot) {
                var $template = $('<div>')
                var $choice = $('<ul class="chat-choice">')                

                $template.append($('<div class="bot-message"></div>').html('<span class="message">'+ options.message +'</span>'))
                
                for (i in options.choices) {
                    $choice.append('<li>'+ options.choices[i] +'</li>')
                }

                $template.append($choice)

                $choice.find('li').on('click', function () {
                    var index = $(this).index()

                    $choice.remove()
                    $template.append('<div class="user-message"><span class="message">'+ options.choices[$(this).index()] +'</span></div>')

                    bot.handleDiscussionResponse(index, options.choices[index])
                })

                return $template
            },
        })
    })

}(jQuery, GspBot)