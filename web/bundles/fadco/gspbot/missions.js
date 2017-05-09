!function($, GspBot) {

    var MESSAGE_ECHEC_MISSION_A_ID = 2,
        MESSAGE_ECHEC_MISSION_B_ID = 3,
        MESSAGE_ECHEC_MISSION_C_ID = 5,
        MESSAGE_ECHEC_MISSION_D_ID = 7,

        MESSAGE_MISSION_NON_ENTAME_ID = 11        

    GspBot.initialize(function(bot) {

        /*bot.addMenu('Mes missions', 'missions')
        bot.addTemplate({
            name: 'mission',
            prototype: '<div style="padding: 20px; border-bottom: 1px solid #e7e7e7;">__designation__</div>',
            variables: ['designation']
        })*/

        bot.schedule(ONE_SECOND * 10, function() {
            bot.fetchDailyMission()
        })        

        if (!bot.isOn("/grh")) {
            bot.everyFiveMinutes(function() {
                bot.checkWaitingReports()
            }, true)
        }           
    })

    GspBot.extend('fetchDailyMission', function() {

        $.ajax({
            url: this.generateUrl('grh_missionjournaliere_fetch_daily_missions'),
            type: 'GET',
            dataType: 'json'
        }).done(function(response) {

            if (response.status == 'mission') {
                var missions = response.missions
                
                for (i in missions) {

                    /*GspBot.addContent('missions', {
                        template: 'mission',
                        id: missions[i].id,
                        designation: missions[i].designation,
                    })*/
                }
            } else if (response.status == 'lessThan50') {

                if (IS_NONE(Cookies.get('gspbot.missions.appreciation'))) {
                    var msg = 'Mr ' +
                        GspBot.getUserName() +
                        ' Toutes les missions qu\'on vous a confié aujourd\'hui '+
                        'ont été validé à moins de 50%. ' + 
                        'vous devez mieux confier vos taches à l\'Esprit saint ' +
                        'et revoir aussi votre methode de travail !'

                    GspBot.nextSecond(function() {
                        GspBot.say(msg, '', true)
                    })

                    Cookies.set('gspbot.missions.appreciation', 'value', {
                        expires: GspBot.tomorrowMidnight()
                    })
                }     

            } else if (response.status == 'applause') {

                if (IS_NONE(Cookies.get('gspbot.missions.appreciation'))) {
                    var msg = 'Félicitation, Mr ' + GspBot.getUserName() +
                        ' Vous avez fait une très bonne performance auhourd\'hui.' +
                        ' Continuez comme ça !'

                    GspBot.nextSecond(function() {
                        GspBot.say(msg, '', true)
                    })

                    Cookies.set('gspbot.missions.appreciation', 'value', {
                        expires: GspBot.tomorrowMidnight()
                    })
                }                    
            } else if (response.status == 'super-applause') {

                if (IS_NONE(Cookies.get('gspbot.missions.appreciation'))) {
                    var msg = 'Félicitation, Mr ' + GspBot.getUserName() +
                        ' Nous somme fier de vous, vous êtes très performant.' +
                        ' Progressez ainsi !'

                    GspBot.nextSecond(function() {
                        GspBot.say(msg, '', true)
                    })

                    Cookies.set('gspbot.missions.appreciation', 'value', {
                        expires: GspBot.tomorrowMidnight()
                    })
                }                    
            }               
            
        }).fail(function(e) {
            console.log(e)
        })
    })

    GspBot.extend('checkWaitingReports', function() {

        $.ajax({
            url: this.generateUrl('grh_missionjournaliere_check_waiting_reports'),
            type: 'GET'
        }).done(function(count) {
            
            if (count > 0) {
                // GspBot.lockApp()
                GspBot.say('Monsieur le directeur, vous avez ' + count + ' ' + GspBot.pluralize(count, 'rapport', 'rapports') + ' de mission que vous n\'avez pas encore validé !', function() {
                    GspBot.unlockApp()
                    GspBot.redirectToRoute('grh_bondecommandejournalier_waiting_reports')
                })
            }
        })
    })

    GspBot.extend('lessThan50Discussion', function () {

        var data = {}
        var message = 'Monsieur le directeur, ' +
                                'vous devez coacher ce prestataire sur cette mission. ' +
                                'Voulez-vous que je note ça pour vous ?'

        var chat = this.discuss('lessThan50Discussion', {
            template: 'chat_choice',
            message: message,
            choices: ['Oui', 'Non'],
            id: 1
        })

        chat.preventPersist()

        chat.listen(function (self, res, old) {
            switch(old.id) {
                case 1: 
                    if (res == 1) {
                        self.close()
                    } else {
                        self.sendMessage({
                            template: 'chat_prompt',
                            message: 'Titre de la note',
                            id: 2
                        })
                    }
                    break;
                case 2: 
                    data['gspbundle_task[title]'] = res
                    self.sendMessage({
                        template: 'chat_prompt',
                        message: 'Description de la note',
                        id: 3
                    })
                    break;
                case 3:
                    data['gspbundle_task[description]'] = res
                    self.sendMessage({
                        template: 'chat_prompt',
                        message: 'Date d\'exécution',
                        type: 'date',
                        format: 'DD/MM/YYYY HH:mm',
                        id: 4
                    })
                    break;
                case 4:
                    data['gspbundle_task[executeAt]'] = res
                    self.sendMessage({
                        template: 'chat_message',
                        message: 'Sauvegarde la note en cours...',
                        id: 5
                    })

                    $.ajax({
                        url: GspBot.generateUrl('gsp_task_ajax_create'),
                        type: 'POST',
                        data: data,
                    })
                    .done(function(response) {
                        
                        self.sendMessage({
                            template: 'chat_message',
                            message: 'La note à été bien sauvegardé !',
                            id: 6
                        })

                        GspBot.schedule(1000, function() {
                            self.close()
                        })
                    })
                    .fail(function(error) {
                        console.log(error.responseText)
                    })
                    break;
            }
        })
    })

    GspBot.extend('echecMission', function(mission) {

        var bot = this

        this.lockApp()

        var discussion = this.discuss('echec-mission', {
            template: 'chat_prompt',
            id: MESSAGE_ECHEC_MISSION_A_ID,
            message: 'Mr ' + this.getUserName() + ', avez-vous confié cette mission au Saint Esprit ? Ou bien qu\'est-ce que vous avez fait qui n\'a pas marché ?'
        })

        discussion.listen(function(self, res, msg) {

            switch (msg.id) {
                case MESSAGE_ECHEC_MISSION_A_ID:
                    self.sendMessage({
                        template: 'chat_prompt',
                        id: MESSAGE_ECHEC_MISSION_B_ID,
                        message: 'Quelle méthode avez-vous utilisé ?'
                    })
                    break;
                case MESSAGE_ECHEC_MISSION_B_ID:
                    self.sendMessage({
                        template: 'chat_prompt',
                        id: MESSAGE_ECHEC_MISSION_C_ID,
                        message: 'Avez-vous eu tous les intrants nécessaires ? Si non lesquels vous ont manqué ?'
                    })
                    break;
                case MESSAGE_ECHEC_MISSION_C_ID:
                    self.sendMessage({
                        template: 'chat_prompt',
                        id: MESSAGE_ECHEC_MISSION_D_ID,
                        message: 'Quelle conclusion tirez-vous et quelle resolution prenez-vous ?'
                    })
                    break;
                case MESSAGE_ECHEC_MISSION_D_ID:
                    bot.schedule(1000, function () {
                        bot.unlockApp()
                        self.close()
                    })  
                    break;
            }
        })

        discussion.postPersist(function(id) {
            $.ajax({
                url: bot.generateUrl('grh_missionjournaliere_notify_failed'),
                type: 'GET',
                data: {
                    idBonCommande: mission.bonCommande.id,
                    idMessage: id,
                }        
            })
            .done(function() {
                bot.notify('Merci d \'avoir repondu')
            })
        })
    })

    GspBot.extend('missionNonEntame', function(mission) {

        var bot = this

        this.lockApp()

        var discussion = this.discuss('echec-mission', {
            template: 'chat_prompt',
            id: MESSAGE_MISSION_NON_ENTAME_ID,
            message: 'Mr ' + this.getUserName() + ', qu\'est-ce qui vous a bloqué ?'
        })

        discussion.listen(function(self, res, msg) {

            switch (msg.id) {
                case MESSAGE_MISSION_NON_ENTAME_ID:
                    bot.schedule(1000, function () {
                        self.close().done(function () {
                            bot.unlockApp()
                            bot.schedule(1000, function() {
                                bot.notify('Merci d \'avoir repondu')
                            })
                        })
                    })  
                    break;
            }
        })
    })

} (jQuery, GspBot)