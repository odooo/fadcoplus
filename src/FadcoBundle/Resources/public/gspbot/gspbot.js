/**
 * GspBot, a bot to easly interact with GSP Manager application users
 *
 * @author Eldo Magan <me@eldomagan.com>
 */

!function($, window) {

    var GspBot = window.GspBot = {}
    var IS_NONE = window.IS_NONE = function(o) { return (typeof o == 'undefined') }
    var IS_NUMBER = window.IS_NUMBER = function(o) { return (typeof o == 'number') }
    var IS_STRING = window.IS_STRING = function(o) { return (typeof o == 'string') }
    var IS_OBJECT = window.IS_OBJECT = function(o) { return (typeof o == 'object') }    
    var IS_FUNCTION = window.IS_FUNCTION = function(o) { return (typeof o == 'function') }
    
    var ONE_SECOND = window.ONE_SECOND = 1000
    var ONE_MINUTE = window.ONE_MINUTE = 60 * ONE_SECOND

    var ANIMATION_DELAY = 500

    GspBot.currentUser = {}
    GspBot.counter = 0
    GspBot.contents = {}
    GspBot.templates = {}
    GspBot.initialized = false
    GspBot.initializers = []
    GspBot.actionsPool = []
    GspBot.discussions = {}
    GspBot.currentDiscussion = false

    /**
     * Discussion class
     * 
     * @param bot          A reference to GspBot
     * @param id           Unique id for this discussion
     * @param startMessage A message to start the discussion
     */
    function Discussion(bot, id, startMessage) {
        this.bot = bot
        this.id = id
        this.started = false
        this.listeners = []
        this.messages = []
        this.startMessage = startMessage
        this.currentMessage = startMessage
        this.persistDiscussion = true
        this.postPersistCallbacks = []

        this.messages.push({
            author: 'bot',
            message: !IS_NONE(startMessage.message) ? startMessage.message : ''
        })
    }

    Discussion.prototype = {

        /**
         * Register a listener to user interaction for this discussion.
         * Each listener take three parameters:
         *     1. This discussion
         *     2. User response
         *     3. Your previous message
         * 
         * @param  function     onResponse the listener
         * @return Discussion            
         */
        listen: function (onResponse) {
            this.listeners.push(onResponse)

            return this
        },

        /**
         * [close description]
         * 
         * @return {[type]} [description]
         */
        close: function () {
            return this.bot.closeDiscussion(this)
        },

        /**
         * [sendMessage description]
         * 
         * @param  {[type]} message [description]
         * @return {[type]}         [description]
         */
        sendMessage: function (message) {
            this.currentMessage = message            
            this.bot.sendDiscussionMessage(message)

            this.messages.push({
                author: 'bot',
                message: !IS_NONE(message.message) ? message.message : ''
            })

            return this
        },

        /**
         * [post description]
         * 
         * @param  {[type]} response [description]
         * @return {[type]}          [description]
         */
        post: function (response, responseToPersist) {
            
            this.messages.push({
                author: 'user',
                message: !IS_NONE(responseToPersist) ? responseToPersist : response
            })

            for (i in this.listeners) {
                this.listeners[i](this, response, this.currentMessage)
            }

            return this
        },

        /**
         * [resume description]
         * 
         * @return {[type]} [description]
         */
        resume: function() {
            return this.messages
        },

        preventPersist: function () {
            this.persistDiscussion = false

            return this
        },

        postPersist: function (callback) {
            this.postPersistCallbacks.push(callback)

            return this
        }
    }

    /**
     * Initialize the bot when the page load complete
     * 
     * @param Object user informations about current user
     */
    GspBot.boot = function (user) {

        var _self = this

        if (this.initialized) {
            return
        }

        this.initialized = true
        this.isAlertBoxOpened = false

        this.currentUser = user
        this.$botOverlay = $('#gspbot-overlay')
        this.$botCounter = $('#gspbot-counter')
        this.$botIcon = $('#gspbot-icon')
        this.$botZone = $('#gspbot-zone')
        this.$botZoneMenu = $('#gspbot-zone-menu')
        this.$alertBox = $('#gspbot-alert-box')
        this.$alertBoxContent = $('#gspbot-alert-box-content')
        this.$alertBoxButtons = $('#gspbot-alert-box-content')
        this.$alertBoxBtnOk = $('#gspbot-alert-btn-ok').hide()
        this.$alertBoxBtnCancel = $('#gspbot-alert-btn-cancel').hide()

        this.soundManager.audios['beep'] = document.getElementById('gspbot-sound-beep')        

        this.showBotIcon()

        this.$botOverlay.on('click', function (e) {
            e.stopPropagation()
        })

        this.$botIcon.on('click', function () {
            _self.openBotZone()
        })

        this.$botZone.find('#gspbot-zone-close').on('click', function (e) {
            e.preventDefault()
            _self.closeBotZone()
        })                        

        this.addMenu('Accueil', 'home')

        for (i in this.initializers) {
            this.initializers[i](this)
        }
            
        this.addContent('home', {
            template: 'empty'
        })

        this.selectMenu('home')
    }

    /**
     * Register an initializer to be run on page load complete
     * 
     * @param  function initializer [description]
     */
    GspBot.initialize = function (initializer) {

        if (IS_FUNCTION(initializer)) {            
            this.initializers.push(initializer)
        } else {
            this.boot(initializer)
        }
    }

    /**
     * Get current user id
     * 
     * @return integer 
     */
    GspBot.getUserId = function () {
        return this.currentUser.id
    }

    /**
     * Get current user name
     * 
     * @return string
     */
    GspBot.getUserName = function () {
        return this.currentUser.name
    }

    /**
     * Manager GspBot sound
     * @type Object
     */
    GspBot.soundManager = {
        audios: {},
        playingSound: false,

        /**
         * Play a soung
         * 
         * @param  string   sound  the sound unique id
         * @param  boolean  single 
         */
        play: function (sound, single) {
            /*if (this.playingSound && !IS_NONE(single) && single) {
                this.playingSound.stop()
            }*/

            if (!IS_NONE(this.audios[sound])) {
                this.audios[sound].play()
                this.playingSound = this.audios[sound]
            }
        },

        beep: function () {
            this.play('beep', true)            
        }
    }

    /**
     * Hide the bot icon
     */
    GspBot.showBotIcon = function () {
        var _self = this

        var dim = {
            width: _self.$botIcon.width(),
            height: _self.$botIcon.height(),
        }

        _self.$botIcon.css({
            width: 0,
            height: 0,
        }).show()

        _self.$botIcon.animate(dim, ANIMATION_DELAY)
    }

    /**
     * Hide the bot icon. In reality, you will never have to use this function
     */
    GspBot.hideBotIcon = function () {
        var _self = this

        var dim = {
            width: _self.$botIcon.width(),
            height: _self.$botIcon.height(),
        }

        _self.$botIcon.animate({
            width: 0,
            height: 0,
        }, ANIMATION_DELAY, function() {
            _self.$botIcon.hide().css(dim)
        })
    }

    GspBot.openBotZone = function () {
        $('body').css('overflow-y', 'hidden')
        this.$botZone.show()
    }

    GspBot.closeBotZone = function () {
        this.$botZone.hide()
        $('body').css('overflow-y', 'auto')   
    }

    /**
     * [say description]
     * 
     * @param  string                   message
     * @param  integer|Function|Object  options
     */
    GspBot.say = function (message, options, persist) {
        
        if (IS_OBJECT(this.currentDiscussion) || this.isAlertBoxOpened) {
            
            this.actionsPool.push({
                type: 'say',
                message: message,
                options: options,
            })

            return;            
        }

        var _self = this
        var okText = IS_OBJECT(options) && IS_STRING(options.okText) ? options.okText : 'Ok'

        this.showAlertBox(message, okText).done(function () {

            if (IS_NUMBER(options)) {
                _self.schedule(options, function () {
                    _self.closeAlertBox().done(function () {
                        _self.$alertBoxBtnOk.off('click')
                    })
                })
            }
        })

        this.$alertBoxBtnOk.one('click', function (e) {            
            e.preventDefault()
            e.stopPropagation()

            _self.closeAlertBox().done(function () {
                
                if (IS_FUNCTION(options)) {
                    options()
                } else if (IS_OBJECT(options) && IS_FUNCTION(options.callback)) {
                    options.callback()
                }
            })                        

            _self.$alertBoxBtnOk.off('click')
        })                        

        if (persist === true) {
            $.ajax({
                url: _self.generateUrl('gsp_messages_bot_persist'),
                type: 'POST',
                data: {
                    type: 'message',
                    messages: [{
                        author: 'bot',
                        message: message
                    }]
                }
            })
        }
    }

    /**
     * [notify description]
     * 
     * @param  message message
     */
    GspBot.notify = function (message) {
        this.say(message, 3000)
    }

    /**
     * [ask description]
     * 
     * @param  string           message
     * @param  Function|Object  options
     */
    GspBot.ask = function (message, options) {        

        if (IS_OBJECT(this.currentDiscussion) || this.isAlertBoxOpened) {

            this.actionsPool.push({
                type: 'ask',
                message: message,
                options: options,
            })

            return;            
        }

        var _self = this                
        var okText = IS_OBJECT(options) && IS_STRING(options.positiveText) ? options.positiveText : 'Oui'
        var cancelText = IS_OBJECT(options) && IS_STRING(options.negativeText) ? options.negativeText : 'Non'

        this.showAlertBox(message, okText, cancelText)

        this.$alertBoxBtnOk.one('click', function (e) {            
            e.preventDefault()
            e.stopPropagation()

            _self.closeAlertBox().done(function () {  

                if (IS_FUNCTION(options)) {
                    options()
                } else if (IS_OBJECT(options) && IS_FUNCTION(options.onPositiveAction)) {
                    options.onPositiveAction()
                }
            })                        

            _self.$alertBoxBtnOk.off('click')
            _self.$alertBoxBtnCancel.off('click')
        })

        this.$alertBoxBtnCancel.one('click', function (e) {            
            e.preventDefault()
            e.stopPropagation()

            _self.closeAlertBox().done(function () {

                if (IS_OBJECT(options) && IS_FUNCTION(options.onNegativeAction)) {
                    options.onNegativeAction()
                }
            })

            _self.$alertBoxBtnOk.off('click')
            _self.$alertBoxBtnCancel.off('click')
        })
        
        this.soundManager.beep()
    }

    /**
     * Start new discussion with the user
     * 
     * @param  string id
     * @param  Object startMessage
     * 
     * @return Discussion
     */
    GspBot.discuss = function (id, startMessage) {
        var discussion        

        if (IS_OBJECT(this.discussions[id])) {            
            discussion = this.discussions[id]
            discussion.startMessage = startMessage
        } else {
            discussion = new Discussion(this, id, startMessage)
            this.discussions[id] = discussion
        }        

        this.startDiscussion(discussion)

        return discussion
    }   

    GspBot.startDiscussion = function (discussion) {
        
        if (IS_OBJECT(this.currentDiscussion) || this.isAlertBoxOpened) {
            
            this.actionsPool.push({
                type: 'discussion',
                discussion: discussion
            })

            return
        }

        discussion.currentMessage = discussion.startMessage
        this.currentDiscussion = discussion
        this.sendDiscussionMessage(discussion.startMessage)
    }

    GspBot.sendDiscussionMessage = function (message) {
        
        var _self = this

        function showMessage(message) {

            $el = _self.renderTemplate(message)
            _self.$alertBoxContent.append($el)

            if(IS_FUNCTION(_self.templates[message.template].setup)) {
                _self.templates[message.template].setup($el)
            }                                

            var height = _self.$alertBoxContent.height() + 25

            if (height <= 500) {
                _self.$alertBox.height(height)
            } else {
                _self.$alertBox.height(500).css({
                    'overflow-y': 'auto',
                    'overflow-x': 'hidden',
                }).scrollTop(height)
            }
        }

        if (!this.isAlertBoxOpened) {                  
            this.showAlertBox().done(function() {
                showMessage(message)
            })
        } else {
            showMessage(message)
        }
    }

    GspBot.closeDiscussion = function (discussion) {

        var _self = this        
        
        if (discussion.persistDiscussion) {

            $.ajax({
                url: _self.generateUrl('gsp_messages_bot_persist'),
                type: 'POST',
                data: {
                    type: 'discussion',
                    messages: discussion.resume()
                }
            })
            .done(function(id) {
                for (i in discussion.postPersistCallbacks) {
                    var callback = discussion.postPersistCallbacks[i]

                    if (IS_FUNCTION(callback)) {
                        callback(id)
                    }
                }
            })
            .fail(function(res) {
                console.log(res.responseText)
            })
        }

        return _self.closeAlertBox().done(function () {

            _self.currentDiscussion = false
        })        
    }

    GspBot.handleDiscussionResponse = function (response, responseToPersist) {

        if (IS_OBJECT(this.currentDiscussion)) {
            this.currentDiscussion.post(response, responseToPersist)
        }
    }

    GspBot.doNextAction = function () {

        if (this.actionsPool.length != 0) {

            var action = this.actionsPool.shift()

            if (action.type == 'say') {
                this.say(action.message, action.options)
            } else if (action.type == 'ask') {
                this.ask(action.message, action.options)
            } else if (action.type == 'discussion') {
                this.startDiscussion(action.discussion)
            }
        }
    }

    /**
     * [showAlertBox description]
     * 
     * @param  string message    [description]
     * @param  string okText     [description]
     * @param  string cancelText [description]
     */
    GspBot.showAlertBox = function (message, okText, cancelText) {
        
        var _self = this
        var deferred = $.Deferred()

        this.isAlertBoxOpened = true

        if (IS_STRING(message)) {
            this.$alertBoxContent.text(message)    
        }

        if (IS_STRING(okText)) {
            this.$alertBoxBtnOk.text(okText).show()
        }
                
        if (IS_STRING(cancelText)) {
            this.$alertBoxBtnCancel.text(cancelText).show()
        }     

        var dim = {
            'width': _self.$alertBox.outerWidth(),
            'height': _self.$alertBox.outerHeight()
        }

        this.$alertBox.css({
            width: 0,
            height: 0,
        }).show()

        this.$alertBox.animate(dim, ANIMATION_DELAY, function() {
            deferred.resolve()
        })

        this.soundManager.beep()

        return deferred
    }

    /**
     * [closeAlertBox description]
     */
    GspBot.closeAlertBox = function () {
        
        var _self = this
        var deferred = $.Deferred();
        var dim = {
            width: _self.$alertBox.outerWidth(),
            height: _self.$alertBoxContent.outerHeight()
        }        

        this.$alertBox.animate({
            width: 0,
            height: 0,
        }, ANIMATION_DELAY, function () {

            _self.$alertBoxContent.text('')
            _self.$alertBoxBtnOk.hide()
            _self.$alertBoxBtnCancel.hide()
            _self.$alertBox.hide().width(dim.width).height('auto')

            _self.isAlertBoxOpened = false            

            if (_self.actionsPool.length > 0) {

                _self.schedule(1000, function() {
                    _self.doNextAction()
                })            
            }

            deferred.resolve()
        })

        return deferred
    }

    /**
     * [lockApp description]
     */
    GspBot.lockApp = function () {
        
        this.$botOverlay.show()

        $(window).bind('beforeunload unload', function(e) {            
            e.preventDefault()
            return 'Vous avez une action en cours !'
        })
    }

    /**
     * [unlockApp description]
     */
    GspBot.unlockApp = function () {
        $(window).unbind('beforeunload unload')
        this.$botOverlay.hide()
    }    

    /**
     * Add new menu
     * 
     * @param string title  Displayed text of the menu
     * @param string menuId id of the menu.
     */
    GspBot.addMenu = function (title, menuId) {

        var $newMenu = $('<li><a href="#">' + title + '</a></li>')
        var $tabContent = $('<div class="tab-pane"></div>').hide()

        this.$botZoneMenu.append($newMenu)
        $('#gspbot-zone-content').append($tabContent)

        $newMenu.bind('click', function(e) {
            e.preventDefault()
            $('.menu-text').text($(this).text())

            $('#gspbot-zone-content .tab-pane').hide()
            $('#gspbot-zone-content .tab-pane').eq($(this).index()).show()
        })        

        if (!IS_NONE(this.contents[menuId])) {
            alert('Menu ' + menuId + ' already exists. Please, choose another id')
            return
        }

        this.contents[menuId] = $tabContent
    }

    /**
     * [selectMenu description]
     * 
     * @param  string menuId
     */
    GspBot.selectMenu = function (menuId) {

        if (IS_NONE(this.contents[menuId])) {
            alert('Can not select menu ' + menuId + ' !. This menu does not exists')
            return
        }

        $('#gspbot-zone-menu').find('li').eq(this.contents[menuId].index()).click()
    }

    /**
     * [addTemplate description]
     * 
     * @param Object options
     */
    GspBot.addTemplate = function (options) {

        if (IS_NONE(options.name)) {
            alert('You must set template name !')
            return
        } else if(!IS_NONE(this.templates[options.name])) {
            alert('A templates with given name already exists !')
            return
        }

        if (!IS_STRING(options.prototype) && !IS_STRING(options.template) && !IS_FUNCTION(options.render)) {
            alert('You must set template "template|prototype" or define "render" function when adding template "'+ options.name +'"!')
            return
        }

        this.templates[options.name] = options
    }

    /**
     * [addContent description]
     * 
     * @param string menuId
     * @param Object options
     */
    GspBot.addContent = function (menuId, options) {

        if (IS_NONE(this.contents[menuId])) {
            alert('Can not add new content. Menu id "' + menuId + '" does not exist!')
            return
        }

        if (IS_NONE(options.template)) {
            alert('You must set content "template" when adding a content')
            return
        }

        var $content = this.renderTemplate(options)

        this.contents[menuId].append($content)

        if (IS_FUNCTION(this.templates[options.template].setup)) {
            this.templates[options.template].setup($content, options)
        }
    }

    GspBot.renderTemplate = function (options) {

        var template = this.templates[options.template]

        if (IS_NONE(template)) {
            alert('Template "'+ options.template +'" does not exist !')
        }

        if (IS_FUNCTION(template.render)) {
            return template.render(options, this)
        }

        var content = template.prototype || template.template

        if (IS_OBJECT(template.variables)) {

            for (i in template.variables) {

                var variable = template.variables[i]

                if (IS_NONE(options[variable])) {
                    alert('Template "' + template.name + '" require variable "'+ variable +'"')
                }
                
                content = content.replace(new RegExp('__' + variable + '__', 'g'), options[variable])
            }
        }
        
        return $(content)
    }

    /**
     * [incrementCounter description]
     * 
     * @param  integer nb
     */
    GspBot.incrementCounter = function (nb) {

        this.counter += IS_NUMBER(nb) ? nb : 1
        this.$botCounter.text(this.counter)

        if (this.counter > 0) {
            this.$botCounter.show()
        }
    }

    /**
     * [decrementCounter description]
     * 
     * @param  integer nb
     */
    GspBot.decrementCounter = function (nb) {

        this.counter -= IS_NUMBER(nb) ? nb : 1
        this.$botCounter.text(this.counter)

        if (this.counter <= 0) {
            this.$botCounter.hide()
        }
    }

    /**
     * Extend GspBot
     * 
     * @param  string name
     * @param  Function addon
     */
    GspBot.extend = function (name, addon) {

        var extended = addon

        if (IS_FUNCTION(this[name])) {

            console.log('function "'+ name +'" extended !')

            extended = function () {
                this[name]()
                addon()
            }
        }

        this[name] = extended
    }    

    // HELPERS
    // 

    /**
     * [schedule description]
     * 
     * @param  integer      timeout
     * @param  Function     callback
     */
    GspBot.schedule = function (timeout, callback) {

        if (IS_FUNCTION(callback) && timeout > 0) {
            setTimeout(function () {                
                callback(GspBot)
            }, timeout)
        }
    }

    /**
     * [interval description]
     * 
     * @param  integer  timeout
     * @param  Function callback
     * @param  string   name
     */
    GspBot.interval = function (timeout, callback, startNow) {
        if (IS_FUNCTION(callback) && timeout > 0) {
            setInterval(function () {                
                callback(GspBot)
            }, timeout)

            if (startNow) {
                callback(GspBot)
            }
        }   
    }

    /**
     * [nextSecond description]
     * 
     * @param  Function callback
     */
    GspBot.nextSecond = function (callback) {
        this.schedule(ONE_SECOND, callback)
    }

    /**
     * [nextMinute description]
     * 
     * @param  Function callback
     */
    GspBot.nextMinute = function (callback) {
        this.schedule(ONE_MINUTE, callback)
    }

    /**
     * [everySecond description]
     * 
     * @param  Function callback
     */
    GspBot.everySecond = function (callback, startNow) {
        this.interval(ONE_SECOND, callback, startNow)
    }

    /**
     * [everyMinute description]
     * 
     * @param  Function callback
     */
    GspBot.everyMinute = function (callback, startNow) {
        this.interval(ONE_MINUTE, callback, startNow)
    }

    /**
     * [everyFiveMinutes description]
     * 
     * @param  Function callback
     */
    GspBot.everyFiveMinutes = function (callback, startNow) {
        this.interval(5 * ONE_MINUTE, callback, startNow)
    }

    /**
     * [everyTenMinutes description]
     * 
     * @param  Function callback
     */
    GspBot.everyTenMinutes = function (callback, startNow) {
        this.interval(10 * ONE_MINUTE, callback, startNow)
    }

    /**
     * [pluralize description]
     * 
     * @param  integer  count
     * @param  string   singular
     * @param  string   plurial
     * 
     * @return string
     */
    GspBot.pluralize = function (count, singular, plurial) {
        if (count == 1) {
            return singular
        } else {
            return plurial
        }
    }

    GspBot.generateUrl = function (route, params) {
        return Routing.generate(route, params, true)
    }

    GspBot.redirectToRoute = function (route, params) {        
        this.redirect(this.generateUrl(route, params))
    }

    GspBot.redirect = function (url) {
        this.unlockApp()
        window.location.href = url
    }

    GspBot.isOn = function (url) {
        return window.location.href.match(new RegExp(url, 'g'))
    }

    GspBot.onLocalhost = function (callback) {

        if (window.location.hostname == 'localhost') {
            callback()
        }
    }

    GspBot.tomorrowMidnight = function () {

        var tomorrowMidnight = new Date()
        tomorrowMidnight.setDate((new Date).getDate() + 1)
        tomorrowMidnight.setHours(0, 0, 0, 0)

        return tomorrowMidnight
    }

}(jQuery, window)