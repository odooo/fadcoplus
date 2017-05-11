var discussionsListe = [];
var discussionsIdListe = [];
var discussionLastDates = [];
var nbDiscussionOuvertes = 0;
var decalage = 315;
var nbDiscMax = 3;
var openChatSpace = 150;
var btnSpace = 150;
var lastDiscOpened = null;
var discIdImage = null;
var contIdImage = null;
var actualiser = false;
var btn = false;
var lcUserId = null;
var wsSession = null;
var wsConnected = false;
var subs = null;

//btn btn-primary : pour contact
//btn-primary : pour discussion

//*******************
//Register function for receive notification from websocket
var registeredFunctions = {};

function register(cmd, func){
    registeredFunctions[cmd] = func;
}
//*******************************************

function userConnect(id){
    $("#status"+id+" img").attr("src", baseP+"/bundles/lc/images/green.png");
    $("#connected"+id).show();
}

function userDeconnect(id){
    $("#status"+id+" img").attr("src", baseP+"/bundles/lc/images/gray.png");
    $("#connected"+id).hide();
}

function onlineUsers(ids){
    var data = JSON.parse(ids);
    var cmp = data.length;
    for(var i = 0; i< cmp; i++){
        if(data[i] != lcUserId){
            $("#status"+data[i]+" img").attr("src", baseP+"/bundles/lc/images/green.png");
            $("#connected"+data[i]).show();
        }
    }
}

register("lc", function(data){
    
    switch (data.route){
        case 'lccnd'://ajout du contact ou creation d'une nouvelle discussion avec ajout du contact
            GspBot.say(data.msg);
            break;
        case 'lccnm': //nouveau message reçu
            nouveauMessageRecu(data.post);
            break;
        case 'ou':
            onlineUsers(data.ids);
            break;
        case 'connect':
            if(data.id != lcUserId) userConnect(data.id);
            break;
        case 'deconnect':
            if(data.id != lcUserId) userDeconnect(data.id);
            break;
        default :
            console.log("Commande inconne!!!");            
    }
});

function montrerChat(){
    $("#nb_discs").show("slow");
    $("#chatbutton").show("slow");
}

function setUpWebSocket(){
    
    var myWs = WS.connect(_WS_URI);
    
    myWs.on("socket/connect", function(session){    
        
            subs = session.subscribe("channel/cd", function(uri, payload){
                var data = JSON.parse(payload);
                registeredFunctions[data.cmd](data);
            });
            
            subs

            session.subscribe("channel/"+lcUserId/*userId*/, function(uri, payload){
                var data = JSON.parse(payload);
                registeredFunctions[data.cmd](data);
            });
            
            session.publish("channel/cd", { "cd": "c", "id": lcUserId });
            
            montrerChat(); 
            
            console.log("Successfully Connected!");
        
    });

    myWs.on("socket/disconnect", function(error){ 
        
        console.log("Disconnected for " + error.reason + " with code " + error.code);
    });
    
}

$(function(){
        
        $.post(lcregisterPath, {},
		function(data){
                    lcUserId = data.id;
                    console.log("Registered");
                    mettreAjourContacts();
                    mettreAjourDiscussions();                                            
		})
	.fail(function(data){
		
		console.log("Impossible register");
	});        
    
        $("#contact_ajout_contact_discussion").multiSelect({
                    selectableHeader: "<div class='costum-header'>Les contacts</div>",
                    selectionHeader: "<div class='costum-header'>Contacts ajoutés</div>"
            });

        $("#contact_form_nouvelle_discussion").multiSelect({
                    selectableHeader: "<div class='costum-header'>Les contacts</div>",
                    selectionHeader: "<div class='costum-header'>Contacts ajoutés</div>"
	});
        
});

function getConnectedUsers(){    
    $.post(lcgcuPath, {},function(data){}).fail(function(data){});     
}

function jouerNotificationDisc(){
		document.getElementById('disc_beep').play();
	}


	function jouerNotificationRoom(){
		document.getElementById('room_beep').play();
	}

        function noSession(code){
		return code == "!S";
	}
	function noPost(code){
		return code == "!P";
	}
	function noParam(code){
		return code == "!PA";
	}
	function isExeption(code){
		return code == "EX";
	}
	function isSucces(code){
		return code == "OK";
	}
        
        function scrollChatRoom(discid){
            var elem = document.getElementById("discRoom"+discid);
            elem.scrollTop = elem.scrollHeight;
        }
        
        function montrerPopupDiscussion(discid){
            if(nbDiscMax == nbDiscussionOuvertes){
                closeBox(lastDiscOpened);
            }
            nbDiscussionOuvertes++;
            $("#discpop"+discid).css("right", (nbDiscussionOuvertes-1)*decalage + openChatSpace);
            $("#discpop"+discid).addClass('popup-box-on');
            discussionsListe[''+discid] = true;
            lastDiscOpened = discid;
        }
        
        function closeBox(discId){
                var hisRight = parseInt($("#discpop"+discId).css("right"));
                $("#discpop"+discId).removeClass('popup-box-on');
                discussionsListe[''+discId] = false;                
                nbDiscussionOuvertes--;
                shiftDownUperOnClose(hisRight);
        }
        
        function shiftDownUperOnClose(hisRight){
            for(var i = 0; i<discussionsIdListe.length; i++){           
                if(discussionsListe[''+discussionsIdListe[i]])
                    if(parseInt($("#discpop"+discussionsIdListe[i]).css("right")) > hisRight)
                        $("#discpop"+discussionsIdListe[i]).animate({"right":  (parseInt($("#discpop"+discussionsIdListe[i]).css("right")) - decalage)}, "slow");
            }
        }
        
        function shiftBoxesUp(){
            for(var i = 0; i<discussionsIdListe.length; i++){           
                if(discussionsListe[''+discussionsIdListe[i]])
                    $("#discpop"+discussionsIdListe[i]).animate({"right":  parseInt($("#discpop"+discussionsIdListe[i]).css("right")) + (openChatSpace - btnSpace)}, "slow");
            }
        }
        
        function shiftBoxesDown(){
            for(var i = 0; i<discussionsIdListe.length; i++){
                if(discussionsListe[''+discussionsIdListe[i]])
                    $("#discpop"+discussionsIdListe[i]).animate({"right": parseInt($("#discpop"+discussionsIdListe[i]).css("right")) - (openChatSpace - btnSpace)}, "slow");
            }
        }
        

function nouveauMessageRecu(msg){
    if(discussionsListe[''+msg.discid] == true){
        createDiscussionBox(msg);
        jouerNotificationRoom();
        marquerLu(msg.id, msg.discid);
    }
    else{
        //********************
        actualiser = true;
        mettreAjourDiscussions();
        mettreAjourContacts();
        //********************
       /* var val = parseInt($("#disc"+msg.discid+" .n_msg").text());
        if(isNaN(val)) val = 0;
        val++;
        $("#disc"+msg.discid+" .n_msg").text(val);*/
        
        val = parseInt($("#nb_discs").text());
        if(isNaN(val)) val = 0;
        val++;
        $("#nb_discs").text(val);
        jouerNotificationDisc();
    }
}

function verificationNouveauxMessages(){   
        $.post(pathnm, {'oid': userId},
		function(data){
			if ( noSession(data.erreur)) {					
				
				console.log(data.erreur+': Vérification nouveaux messages.');
			}
			else if ( isExeption(data.erreur)) {
				
				console.log(data.erreur+" : Vérification nouveaux messages : "+data.ex);
			}
			else{
                            if(data.nb > 0){
                                //GspBot.say("Vous avez "+ data.nb +" nouveau(x) message(s) dans le Tchat");
                                $("#nb_discs").text(data.nb);
                                if(!actualiser){
                                    jouerNotificationDisc();
                                    actualiser = true;
                                }
                                
                                for(var i = 1; i < data.discids.length; i++){
                                    var val = parseInt($("#disc"+data.discids[i]+" .n_msg").text());
                                    if(isNaN(val)) val = 0;
                                    val++;
                                    $("#disc"+data.discids[i]+" .n_msg").text(val);
                                }
                            }
                        }
		}, 'json')
	.fail(function(data){
		
		console.log("Impossible: Vérification nouveaux messages.");
	});
}


function getNouveauxMessages(){

    $.post(newMsg, {},
		function(data){
			if ( noSession(data.erreur)) {
                            console.log(data.erreur+':Récupération des nouveaux méssages.');
			}
			else if ( isExeption(data.erreur)) {
                            console.log(data.erreur+" : Récupération des nouveaux méssages. : "+data.ex);
			}
			else{
                            
                            var cmp = data.length;
                            var maxid = 0;                                                        
                            for (var i = 1; i < cmp; i++) {
                                createDiscussionBox(data[i]); 
                                if(data[i].id > maxid) maxid = data[i].id;
                                if(data[i+1] == undefined){                                    
                                    marquerLu(maxid, data[i].discid);
                                }
                                else{
                                    if(data[i].discid != data[i+1].discid){
                                        marquerLu(maxid, data[i].discid);
                                    }
                                }                                
                            }
                        }
		}, 'json')
	.fail(function(data){
		
		console.log("Impossible de récupérer les nouveaux méssages.");
	});

}

function marquerLu(lastMsgId, discId){

    $.post(mlPath, { 'discid' : discId, 'msgid' : lastMsgId },
			function(data){
				if ( noSession(data.erreur) || noPost(data.erreur) || noParam(data.erreur)) {
					console.log(data.erreur+": Mise à jour du dernier méssage lu.");
					
				}
				else if ( isExeption(data.erreur)) {
					console.log(data.erreur+" : Mise à jour du dernier méssage lu. : "+data.ex);
					//stopInterval();
				}
				else{
					if(isSucces(data.ok)){
						
					}
					else{
                                            console.log("Erreur serveur: Mise à jour du dernier méssage lu.");
                			}
				}

			}, 'json')
			.fail(function(data){
				console.log("Impossible de mettre à jour du dernier méssage lu.");
			});
	}

function marquerLuContact(iddm, idc){
		
		$.post(mlcPath, { 'contid' : idc, 'msgid' : iddm },
			function(data){
				if ( noSession(data.erreur) || noPost(data.erreur) || noParam(data.erreur)) {
					alert(data.erreur+": Mise à jour du dernier méssage lu. Contact");
					//stopInterval();
				}
				else if ( isExeption(data.erreur)) {
					alert(data.erreur+" : Mise à jour du dernier méssage lu. Contact: "+data.ex);
					//stopInterval();
				}
				else{
					if(isSucces(data.ok)){
						
						//startInterval();
					}
					else{
						alert("Erreur serveur: Mise à jour du dernier méssage lu. Contact:");
						//stopInterval();
					}
				}
					cacherChargementEnvoiMessage();

			}, 'json')
			.fail(function(data){
				alert("Impossible de mettre à jour du dernier méssage lu. Contact");
				cacherChargementEnvoiMessage();
			});

	}

function createDiscussionBox(msg){
    if(discussionsListe[''+msg.discid] === undefined){
        discussionsListe[''+msg.discid] = false;
        discussionsIdListe[discussionsIdListe.length] = msg.discid;
        if(msg.adeux == ""){
            var str = msg.titredisc;
            if(str.length > 22) str = str.substring(0, 22)+"...";
            $('body').append("<div class='popup-box chat-popup' id='discpop"+msg.discid+"'><div class='popup-head'><div class='popup-head-left pull-left'>"+str+"</div><div class='popup-head-right pull-right'><button data-widget='remove' onclick='closeBox("+msg.discid+")' id='removeClass"+msg.discid+"' class='chat-header-button pull-right' type='button'><i class='glyphicon glyphicon-off'></i></button></div></div><div class='popup-messages'><div style='height: 100%' class='direct-chat-messages' id='discRoom"+msg.discid+"'></div></div><div class='popup-messages-footer'><div style='text-align: center' hidden='hidden' id='loading"+msg.discid+"'><img src='"+loadingGif+"'/></div><form id=discform"+msg.discid+"><input class='form-control' id='text"+msg.discid+"' placeholder='Taper un message...' name='text"+msg.discid+"'/></form><div class='btn-footer'><button class='bg_none' onclick='choisirImage("+msg.discid+");'><i class='glyphicon glyphicon-picture'></i> </button>\n\
<button class='bg_none' onclick='choisirFichier("+msg.discid+");'><i class='glyphicon glyphicon-file'></i> </button></div></div></div>");
        }else{
            var str = msg.nomposteur;
            if(str.length > 22) str = str.substring(0, 22)+"...";
            $('body').append("<div class='popup-box chat-popup' id='discpop"+msg.discid+"'><div class='popup-head'><div class='popup-head-left pull-left'>"+str+"</div><div class='popup-head-right pull-right'><button data-widget='remove' onclick='closeBox("+msg.discid+")' id='removeClass"+msg.discid+"' class='chat-header-button pull-right' type='button'><i class='glyphicon glyphicon-off'></i></button></div></div><div class='popup-messages'><div style='height: 100%' class='direct-chat-messages' id='discRoom"+msg.discid+"'></div></div><div class='popup-messages-footer'><div style='text-align: center' hidden='hidden' id='loading"+msg.discid+"'><img src='"+loadingGif+"'/></div><form id=discform"+msg.discid+"><input class='form-control' id='text"+msg.discid+"' placeholder='Taper un message...' name='text"+msg.discid+"'/></form><div class='btn-footer'><button class='bg_none' onclick='choisirImage("+msg.discid+");'><i class='glyphicon glyphicon-picture'></i> </button>\n\
<button class='bg_none' onclick='choisirFichier("+msg.discid+");'><i class='glyphicon glyphicon-file'></i> </button></div></div></div>");
        }
        
        $("#discform"+msg.discid).submit(function(){
                        demandeEnvoyerMessage(msg.discid, null);
                        return false;
                    });
                    
        montrerPopupDiscussion(msg.discid);
    }
    else if(discussionsListe[''+msg.discid] === false){
        montrerPopupDiscussion(msg.discid);
    }
    
    afficherMessage(msg, null);
}

function afficherMessage(msg, discId){
    var did = discId;
    if(did == null) did = msg.discid; 
    
    var dt = msg.date.split(" à ");
    if(discussionLastDates[''+did] === undefined){
        discussionLastDates[''+did] = dt[0];
        $("#discRoom"+did).append("<div class='chat-box-single-line'><abbr class='timestamp'>"+ dt[0] +"</abbr></div>");
    }else{
        if(discussionLastDates[''+did] != dt[0]){
            discussionLastDates[''+did] = dt[0];
            $("#discRoom"+did).append("<div class='chat-box-single-line'><abbr class='timestamp'>"+ dt[0] +"</abbr></div>");
        }
    }
    
    if(msg.posteur === msg.demandeur){//propre message
        
        if(msg.adeux === null){//pas à deux

            if(msg.type === "")
                $("#discRoom"+did).append("<div class='direct-chat-msg-right doted-border-right'><div class='direct-chat-text-right'>"+msg.contenu+"</div><div class='direct-chat-info clearfix'><span class='direct-chat-timestamp'>"+dt[1]+"</span></div></div>");
            else{
                if(msg.file === "image" || msg.file === "")
                    $("#discRoom"+did).append("<div class='direct-chat-msg-right doted-border-right'><div class='direct-chat-text-right' id='message"+msg.id+"'><a onclick='clickImage("+msg.id+");' data-toggle='modal' href='#myModal2' class='btn btn-primary'><img style='display: block; max-width: 80px; max-height: 80px' src='"+baseP+"/chatimages/"+msg.type+"'/></a>"+msg.contenu+"</div><div class='direct-chat-info clearfix'><span class='direct-chat-timestamp'>"+dt[1]+"</span></div></div>");
                if(msg.file === "fichier")
                    $("#discRoom"+did).append("<div class='direct-chat-msg-right doted-border-right'><div class='direct-chat-text-right' id='message"+msg.id+"'><a href='"+baseP+"/chatimages/"+msg.type+"' target='_blank' class='btn btn-primary'>Fichier</a>"+msg.contenu+"</div><div class='direct-chat-info clearfix'><span class='direct-chat-timestamp'>"+dt[1]+"</span></div></div>");
            }
        }else{

            if(msg.type === "")
                $("#discRoom"+did).append("<div class='direct-chat-msg-right doted-border-right'><div class='direct-chat-text-right'>"+msg.contenu+"</div><div class='direct-chat-info clearfix'><span class='direct-chat-timestamp'>"+dt[1]+"</span></div></div>");
            else{
                if(msg.file === "image" || msg.file === "")
                    $("#discRoom"+did).append("<div class='direct-chat-msg-right doted-border-right' id='message"+msg.id+"'><div class='direct-chat-text-right' id='message"+msg.id+"'><a onclick='clickImage("+msg.id+");' data-toggle='modal' href='#myModal2' class='btn btn-primary'><img style='display: block; max-width: 80px; max-height: 80px' src='"+baseP+"/chatimages/"+msg.type+"'/></a>"+msg.contenu+"</div><div class='direct-chat-info clearfix'><span class='direct-chat-timestamp'>"+dt[1]+"</span></div></div>");
                if(msg.file === "fichier")
                    $("#discRoom"+did).append("<div class='direct-chat-msg-right doted-border-right' id='message"+msg.id+"'><div class='direct-chat-text-right' id='message"+msg.id+"'><a href='"+baseP+"/chatimages/"+msg.type+"' target='_blank' class='btn btn-primary'>Fichier</a>"+msg.contenu+"</div><div class='direct-chat-info clearfix'><span class='direct-chat-timestamp'>"+dt[1]+"</span></div></div>");
            }
        }
    }
    else{
        
        if(msg.adeux === null){//pas à deux

            if(msg.type === "")
                $("#discRoom"+did).append("<div class='direct-chat-msg doted-border'><div class='direct-chat-info clearfix'><span class='direct-chat-name pull-left'>"+msg.nomposteur+"</span></div><div class='direct-chat-text'>"+msg.contenu+"</div><div class='direct-chat-info clearfix'><span class='direct-chat-timestamp pull-right'>"+dt[1]+"</span></div></div>");
            else{
                if(msg.file === "image" || msg.file === "")
                    $("#discRoom"+did).append("<div class='direct-chat-msg doted-border'><div class='direct-chat-info clearfix'><span class='direct-chat-name pull-left'>"+msg.nomposteur+"</span></div><div class='direct-chat-text' id='message"+msg.id+"'><a onclick='clickImage("+msg.id+");' data-toggle='modal' href='#myModal2' class='btn btn-primary'><img style='display: block; max-width: 80px; max-height: 80px' src='"+baseP+"/chatimages/"+msg.type+"'/></a>"+msg.contenu+"</div><div class='direct-chat-info clearfix'><span class='direct-chat-timestamp pull-right'>"+dt[1]+"</span></div></div>");
                if(msg.file === "fichier")
                    $("#discRoom"+did).append("<div class='direct-chat-msg doted-border'><div class='direct-chat-info clearfix'><span class='direct-chat-name pull-left'>"+msg.nomposteur+"</span></div><div class='direct-chat-text' id='message"+msg.id+"'><a target='_blank' href='"+baseP+"/chatimages/"+msg.type+"' class='btn btn-primary'>Fichier</a>"+msg.contenu+"</div><div class='direct-chat-info clearfix'><span class='direct-chat-timestamp pull-right'>"+dt[1]+"</span></div></div>");
            }
        }else{

            if(msg.type === "")
                $("#discRoom"+did).append("<div class='direct-chat-msg doted-border'><div class='direct-chat-text'>"+msg.contenu+"</div><div class='direct-chat-info clearfix'><span class='direct-chat-timestamp pull-right'>"+dt[1]+"</span></div></div>");
            else{
                if(msg.file === "image" || msg.file === "")
                    $("#discRoom"+did).append("<div class='direct-chat-msg doted-border'><div class='direct-chat-text' id='message"+msg.id+"''><a onclick='clickImage("+msg.id+");' data-toggle='modal' href='#myModal2' class='btn btn-primary'><img style='display: block; max-width: 80px; max-height: 80px' src='"+baseP+"/chatimages/"+msg.type+"'/></a>"+msg.contenu+"</div><div class='direct-chat-info clearfix'><span class='direct-chat-timestamp pull-right'>"+dt[1]+"</span></div></div>");
                if(msg.file === "fichier")
                    $("#discRoom"+did).append("<div class='direct-chat-msg doted-border'><div class='direct-chat-text' id='message"+msg.id+"''><a target='_blank' href='"+baseP+"/chatimages/"+msg.type+"' class='btn btn-primary'>Fichier</a>"+msg.contenu+"</div><div class='direct-chat-info clearfix'><span class='direct-chat-timestamp pull-right'>"+dt[1]+"</span></div></div>");
            }
        }
    }
    
    scrollChatRoom(did);
    
}


function demandeEnvoyerMessage(discId, contId){            
    var message = "";
    message = $("#text"+discId).val();
    
    if(message.trim() != ""){
        if(contId == null) envoyerMessage(message,discId);
        else envoyerMessageContact(contId, message, discId);
        $("#text"+discId).val("");
    }
    else $("#text"+discId).focus();
    return false;
}

    function envoyerMessage(message, discid){
                
		montrerChargementEnvoiMessage(discid);
		
                    $.post(emPath, { 'contenu' : message, 'discid' : discid },
			function(data){
                            
                            if ( noSession(data.erreur) || noPost(data.erreur) || noParam(data.erreur)) {
				console.log(data.erreur+": Envoi de message.");
                            }
                            else if ( isExeption(data.erreur)) {
				console.log(data.erreur+" : Envoi de message. : "+data.ex);
                            }
                            else{
				if(isSucces(data.ok)){
                                    var msg = data.msg;
                                    afficherMessage(msg, null);
                                    marquerLu(msg.id, msg.discid);
				}
				else{
                                    console.log("Erreur serveur: Impossible d'envoyer le message.");
                                }
                            }                              
                      
                            cacherChargementEnvoiMessage(discid);                            

			}, 'json')
                    .fail(function(data){
			console.log("Impossible d'envoyer le message..");
			cacherChargementEnvoiMessage(discid);
                    });
	}
        
function montrerChargementEnvoiMessage(discid){
		$("#discform"+discid).hide('fade');
		$("#loading"+discid).show('fade');
	}

	function cacherChargementEnvoiMessage(discid){
		$("#loading"+discid).hide('fade');
		$("#discform"+discid).show('fade');
                $("#test"+discid).focus();
	}
        
function openChat(){
    if($(".openchat").is(":visible")){
        $(".openchat").hide('fade');
        shiftBoxesDown();
        openChatSpace = 150;
    }
    else{
        openChatSpace = 550;
        $(".openchat").show('fade');
        shiftBoxesUp();
    }    
}

function showListeD(){
    $("#btnd").removeClass("btn-primary").addClass("btn-default");
    $("#btnc").addClass("btn-primary").removeClass("btn-default");
    $("#btnconnected").addClass("btn-primary").removeClass("btn-default");
    $("#contacts-tab-pane").hide();
    $("#connected-tab-pane").hide();
    $("#discussions-tab-pane").show('fade');
    $("#menu_contacts").hide();
    $("#menu_connected").hide();
    $("#menu_discussions").show('fade');
}

function showListeC(){
    $("#btnc").removeClass("btn-primary").addClass("btn-default");
    $("#btnd").addClass("btn-primary").removeClass("btn-default");
    $("#btnconnected").addClass("btn-primary").removeClass("btn-default");
    $("#discussions-tab-pane").hide();
    $("#connected-tab-pane").hide();
    $("#contacts-tab-pane").show('fade');
    $("#menu_discussions").hide();
    $("#menu_connected").hide();
    $("#menu_contacts").show('fade');
}

function showListeConnected(){
    $("#btnconnected").removeClass("btn-primary").addClass("btn-default");
    $("#btnd").addClass("btn-primary").removeClass("btn-default");
    $("#btnc").addClass("btn-primary").removeClass("btn-default");
    $("#contacts-tab-pane").hide();
    $("#discussions-tab-pane").hide();
    $("#connected-tab-pane").show('fade');
    $("#menu_discussions").hide();
    $("#menu_connected").show('fade');
    $("#menu_contacts").hide();
}

//met à jour la liste des contacts
	function mettreAjourContacts(){

		$.post(userPath, {},
			function(data){
				if ( noSession(data.erreur)) {
					console.log(data.erreur+':Récupération des contacts.');
				}
				else if ( isExeption(data.erreur)) {
						console.log(data.erreur+" : Récupération des contacts. : "+data.ex);
					}
				else{
					$("#les_contacts").empty();
                                        $("#les_connected").empty();                                        
					var cmp = data.length;
                                        var dd = "";
					for (var i = 1; i < cmp; i++) {
                                            if(data[i].discavecid == "")dd = "c-"+data[i].id;
                                            else dd = data[i].discavecid;
                                            $("#les_contacts").append("<div onClick='clickSurContact("+data[i].id+")' class='pointer row-fluid alert alert-info btn-lg btn-block' style='text-align: left; padding: 0; margin-bottom: 0; font-size: smaller' id='contact" + data[i].id +"'><span hidden='hidden' id='discavecid"+ data[i].id +"'>"+ dd +"</span><span id='status"+ data[i].id +"' class='pull-right'><img src='"+baseP+"/bundles/lc/images/gray.png'/> </span><p id='nomp"+ data[i].id +"'>"+ data[i].nom+" " + data[i].prenom +"</p></div>");
                                            $("#les_connected").append("<div onClick='clickSurContact("+data[i].id+")' class='pointer row-fluid alert alert-info btn-lg btn-block' style='text-align: left; padding: 0; margin-bottom: 0; font-size: smaller; display: none' id='connected" + data[i].id +"'><span hidden='hidden' id='discavecid"+ data[i].id +"'>"+ dd +"</span><span class='pull-right'><img src='"+baseP+"/bundles/lc/images/green.png'/> </span><p id='nomp"+ data[i].id +"'>"+ data[i].nom+" " + data[i].prenom +"</p></div>");   
					}
                                        
                                        //*******************                                        
                                        if(!wsConnected){
                                            wsConnected = true;
                                            setUpWebSocket();
                                        }else{
                                            getConnectedUsers();
                                        }
                                        //****************
				}
			}, 'json')
		.fail(function(data){
			console.log("Impossible de récupérer des contacts.");
		});
	}
        
        //met à jour la liste des discussions de l'utilisateur
	function mettreAjourDiscussions(){
            
		$.post(discPath, {},
			function(data){
				if ( noSession(data.erreur) ) {
					console.log(nonSession+' : Récupération de vos discussions.');
				}
				else if ( isExeption(data.erreur)) {
						console.log(data.erreur+" : Récupération de vos discussions. : "+data.ex);
				}
				else{
					$("#les_discussions").empty();
					var cmp = data.length;
					for (var i = 1; i < cmp; i++) {

						if(data[i].createur == "")$("#les_discussions").append("<div onClick='clickSurDiscussion("+data[i].id+")'  class='pointer row-fluid alert alert-info btn-lg btn-block' style='text-align: left; padding: 0; margin-bottom: 0; font-size: smaller' id='disc" + data[i].id +"'><p><span class='badge n_msg pull-right' style='background-color: green; color: white'></span></p><p><u style='color: #000055'><b><i><em>Discussion avec: </em></i></b></u><span class='np' id='titre"+data[i].id+"'>"+data[i].avec+"</span></p><p hidden='hidden' id='createur"+data[i].id+"'>"+data[i].createur+"</p></div>");

						else if(data[i].createur == data[i].usercourant)$("#les_discussions").append("<div onClick='clickSurDiscussion("+data[i].id+")' class='pointer row-fluid alert alert-info btn-lg btn-block' style='text-align: left; padding: 0; margin-bottom: 0; font-size: smaller' id='disc" + data[i].id +"'>\n\
                                <p class='pull-right' id='bouton_ajout"+data[i].id+"'>\n\
                                    <button onclick='demandeAjoutContactDiscussion("+ data[i].id +");' type='button' class='btn btn-default' data-toggle='modal' href='#formAjoutContactDiscussionModal' title='Ajouter des contacts à la discussion'><span class='glyphicon glyphicon-plus'></span></button>\n\
                                </p>\n\
                                <p><span class='badge n_msg pull-right' style='background-color: green; color: white'></span></p>\n\
                                <p><u style='color: #000055'><b><i><em>Titre: </em></i></b></u><span class='titre' id='titre"+data[i].id+"'>"+ data[i].titre+"</span></p> <p><u style='color: #005500'><b><i><em>Sujet: </em></i></b></u><span class='sujet'>" + data[i].sujet +"</span></p>\n\
                                <p hidden='hidden' id='createur"+data[i].id+"'>"+data[i].createur+"</p>\n\
                                </div>");
					
                                                else $("#les_discussions").append("<div onClick='clickSurDiscussion("+data[i].id+")' class='pointer row-fluid alert alert-info btn-lg btn-block' style='text-align: left; padding: 0; margin-bottom: 0; font-size: smaller' id='disc" + data[i].id +"'><p><span class='badge n_msg pull-right' style='background-color: green; color: white'></span></p><p><u style='color: #000055'><b><i><em>Titre: </em></i></b></u><span class='titre' id='titre"+data[i].id+"'>"+ data[i].titre+"</span></p> <p><u style='color: #005500'><b><i><em>Sujet: </em></i></b></u><span class='sujet'>" + data[i].sujet +"</span></p><p hidden='hidden' id='createur"+data[i].id+"'>"+data[i].createur+"</p></div>");
					
                                        }
                                        
                                        verificationNouveauxMessages();                          
				}
                                
			}, 'json')
		.fail(function(data){
			console.log("Impossible de récupérer vos discussions.");
		});
	}
        
      
function actualiserLIsteContacts(){
        mettreAjourContacts();
    }
    
    function actualiserLIsteDiscussions(){
        mettreAjourDiscussions();
    }
    
    
	function afficherFormNouvelleDiscussion(){

		$('#contacts_form_nouvelle_discussion_form-group').removeClass("has-error");
		$('#titre_form_nouvelle_discussion_form-group').removeClass("has-error");
		$('#sujet_form_nouvelle_discussion_form-group').removeClass("has-error");

		$('#formNouvelleDiscussionModal').modal({
			keyboard: true
		});

		formNouvelleDiscussionGetLcUsers();
	}

	function validerFormNouvelleDiscussion(){
		var titre = $('#titre_form_nouvelle_discussion').val();
		var sujet = $('#sujet_form_nouvelle_discussion').val();
		var contacts = $("#contact_form_nouvelle_discussion").val();

		var valide = true;
		
		if (titre.trim() == "") {
			valide = valide && false;
			$('#titre_form_nouvelle_discussion_form-group').addClass("has-error");
		}
		else{
			$('#titre_form_nouvelle_discussion_form-group').removeClass("has-error");
		}

		if (sujet.trim() == "") {
			valide = valide && false;
			$('#sujet_form_nouvelle_discussion_form-group').addClass("has-error");
		}
		else{
			$('#sujet_form_nouvelle_discussion_form-group').removeClass("has-error");
		}

		if ( contacts == null) {
			valide = valide && false;
			$('#contacts_form_nouvelle_discussion_form-group').addClass("has-error");
		}
		else{
			$('#contacts_form_nouvelle_discussion_form-group').removeClass("has-error");
		}

		if (valide) {
			$.post(ndPath, {
				'titre' : titre, 'sujet' : sujet, 'contacts' : contacts
			},
			function(data){
					if ( noSession(data.erreur) || noPost(data.erreur) || noParam(data.erreur)) {
						alert(data.erreur+":Création d'une nouvelle discussion.");
					}
					else if ( isExeption(data.erreur)) {
						alert(data.erreur+" : Création d'une nouvelle discussion. : "+data.ex);
					}
					else{
						if(isSucces(data.ok)){

							$('#formNouvelleDiscussionModal').modal('hide');
							$('#titre_form_nouvelle_discussion').val("");
							$('#sujet_form_nouvelle_discussion').val("");
							alert("Discussion bien créée: retrouvez la dans la liste de vos discussions.");
							mettreAjourDiscussions();//créé dans index.html.twig
						}
						else{
							alert("Erreur serveur: Impossible de créer une nouvelle discussion.");
						}
					}
				}, 'json')
			.fail(function(data){
				alert("Impossible de créer une nouvelle discussion.");
			});
		}
	}

	function formNouvelleDiscussionGetLcUsers(){
                $("#contacts_form_nouvelle_discussion_form-group").hide();
                $("#contacts_form_nouvelle_discussion_loading").show();
		$.post(userPath, {},
			function(data){
				if ( noSession(data.erreur)) {
					console.log(data.erreur+':Récupération des utilisateurs.');
				}
				else if ( isExeption(data.erreur)) {
						console.log(data.erreur+" : Récupération des utilisateurs. : "+data.ex);
					}
				else{
					$("#contact_form_nouvelle_discussion").empty();
                                        $("#contact_form_nouvelle_discussion").multiSelect('refresh');
					var cmp = data.length;
					for (var i = 1; i < cmp; i++) {
						$("#contact_form_nouvelle_discussion").append("<option value="+ data[i].id +">" + data[i].nom + " " + data[i].prenom + "</option>");
						//$("#contact_form_nouvelle_discussion").multiSelect('refresh');
					}
                                        $("#contact_form_nouvelle_discussion").multiSelect('refresh');
                                        $("#contacts_form_nouvelle_discussion_loading").hide();
                                        $("#contacts_form_nouvelle_discussion_form-group").show();
				}
			}, 'json')
		.fail(function(data){
			console.log("Impossible de récupérer les utilisateus.");
		});
	}
        
        
        function demandeAjoutContactDiscussion(discId){
            btn = true;
            $("#iddisc").text(discId);
            formAjoutContactDiscussionGetLcUsers(discId);                       
            return false;
        }
        
        
        
    function formAjoutContactDiscussionGetLcUsers(discId){
                
                $("#contacts_form_ajout_contact_discussion_form-group").hide();
                $("#contacts_form_ajout_contact_discussion_loading").show();
                
		$.post(uacPath, {'discid' : discId},
			function(data){
				if ( noSession(data.erreur) || noParam(data.erreur) || noPost(data.erreur)) {
					alert(data.erreur+':Récupération des utilisateurs. Ajout :');
				}
				else if ( isExeption(data.erreur)) {
						alert(data.erreur+" : Récupération des utilisateurs. Ajout : "+data.ex);
					}
				else{
					$("#contact_form_ajout_contact_discussion").empty();
                                        $("#contact_form_ajout_contact_discussion").multiSelect('refresh');
					var cmp = data.length;
					for (var i = 1; i < cmp; i++) {
						$("#contact_form_ajout_contact_discussion").append("<option value="+ data[i].id +">" + data[i].nom + " " + data[i].prenom + "</option>");
						//$("#contact_form_ajout_contact_discussion").multiSelect('refresh');
					}
                                        $("#contact_form_ajout_contact_discussion").multiSelect('refresh');
                                        $("#contacts_form_ajout_contact_discussion_loading").hide();
                                        $("#contacts_form_ajout_contact_discussion_form-group").show();
                                        
				}
			}, 'json')
		.fail(function(data){
			alert("Impossible de récupérer les utilisateurs. Ajout");
		});
	}
        
        function validerFormAjoutContactDiscussion(){
            
            var contacts = $("#contact_form_ajout_contact_discussion").val();

            if ( contacts == null) {
		$('#contacts_form_ajout_contact_discussion_form-group').addClass("has-error");
            }
            else{
		$('#contacts_form_ajout_contact_discussion_form-group').removeClass("has-error");
                
			$.post(acdPath, { 'discid':  $("#iddisc").text(), 'contacts' : contacts },
			
                            function(data){
					if ( noSession(data.erreur) || noPost(data.erreur) || noParam(data.erreur)) {
						console.log(data.erreur+": Ajout de contacts.");
					}
					else if ( isExeption(data.erreur)) {
						console.log(data.erreur+" : Ajout de contacts. : "+data.ex);
					}
					else{
						if(isSucces(data.ok)){

							$('#formAjoutContactDiscussionModal').modal('hide');
							alert("Contact(s) bien ajouté(s) à la discussion.");
						}
						else{
							console.log("Erreur serveur: Impossible d'ajouter des contacts à la discussion.");
						}
					}
				}, 'json')
			.fail(function(data){
				console.log("Impossible d'ajouter des contacts à la discussion.");
			});
            }            
        }
        
        
function clickSurContact(contId){

    var discId = $("#discavecid"+contId).text();
    
    var val = parseInt($("#disc"+discId+" .n_msg").text());
    if(!isNaN(val)){
        var i = parseInt($("#nb_discs").text());
        if(i-val == 0)$("#nb_discs").text(""); 
            else $("#nb_discs").text(i-val);
        $("#disc"+discId+" .n_msg").text("");
    }
    
    if( discId.split('-')[0] == "c"){//la discussion n'existe pas encore
        if(discussionsListe[''+discId] === undefined){
            discussionsListe[''+discId] = false;
            discussionsIdListe[discussionsIdListe.length] = discId;
            var str = $("#nomp"+contId).text();
            if(str.length > 22) str = str.substring(0, 22)+"...";
            $('body').append("<div class='popup-box chat-popup' id='discpop"+discId+"'><div class='popup-head'><div class='popup-head-left pull-left'>"+str+"</div><div class='popup-head-right pull-right'><button data-widget='remove' onclick='closeBox(\""+discId+"\")' id='removeClass"+discId+"' class='chat-header-button pull-right' type='button'><i class='glyphicon glyphicon-off'></i></button></div></div><div class='popup-messages'><div style='height: 100%' class='direct-chat-messages' id='discRoom"+discId+"'></div></div><div class='popup-messages-footer'><div style='text-align: center' hidden='hidden' id='loading"+discId+"'><img src='"+loadingGif+"'/></div><form id=discform"+discId+"><input class='form-control' id='text"+discId+"' placeholder='Taper un message...' name='text"+discId+"'/></form><div class='btn-footer'><button class='bg_none' onclick='choisirImage(\""+discId+"\", "+contId+");'><i class='glyphicon glyphicon-picture'></i> </button>\n\
<button class='bg_none' onclick='choisirFichier(\""+discId+"\", "+contId+");'><i class='glyphicon glyphicon-file'></i> </button></div></div></div>");
            $("#discform"+discId).submit(function(){
                demandeEnvoyerMessage(discId, contId );
                return false;
            });
            montrerPopupDiscussion(discId);
            getDiscussionMessagesContact(contId, discId, !isNaN(val));
        }else{            
            if(!discussionsListe[''+discId]){
                montrerPopupDiscussion(discId);
                if(!isNaN(val)) getNouveauxMessagesDiscussion(discId);
            }
        }
    }else{
        if(discussionsListe[''+discId] === undefined){
            discussionsListe[''+discId] = false;
            discussionsIdListe[discussionsIdListe.length] = discId;
            var str = $("#nomp"+contId).text();
            if(str.length > 22) str = str.substring(0, 22)+"...";
            $('body').append("<div class='popup-box chat-popup' id='discpop"+discId+"'><div class='popup-head'><div class='popup-head-left pull-left'>"+str+"</div><div class='popup-head-right pull-right'><button data-widget='remove' onclick='closeBox("+discId+")' id='removeClass"+discId+"' class='chat-header-button pull-right' type='button'><i class='glyphicon glyphicon-off'></i></button></div></div><div class='popup-messages'><div style='height: 100%' class='direct-chat-messages' id='discRoom"+discId+"'></div></div><div class='popup-messages-footer'><div style='text-align: center' hidden='hidden' id='loading"+discId+"'><img src='"+loadingGif+"'/></div><form id=discform"+discId+"><input class='form-control' id='text"+discId+"' placeholder='Taper un message...' name='text"+discId+"'/></form><div class='btn-footer'><button class='bg_none' onclick='choisirImage("+discId+");'><i class='glyphicon glyphicon-picture'></i> </button>\n\
<button class='bg_none' onclick='choisirFichier("+discId+");'><i class='glyphicon glyphicon-file'></i> </button></div></div></div>");
            $("#discform"+discId).submit(function(){
                demandeEnvoyerMessage(discId, null);
                return false;
            });
            montrerPopupDiscussion(discId);
            getDiscussionMessagesContact(contId, discId, !isNaN(val));
        }else{            
            if(!discussionsListe[''+discId]){
                montrerPopupDiscussion(discId);
                if(!isNaN(val)) getNouveauxMessagesDiscussion(discId);
            }
        }
    }
}

    function clickSurDiscussion(discId){
 
        if(btn){
            btn = false;
            return;
        }
 
        var val = parseInt($("#disc"+discId+" .n_msg").text());
        if(!isNaN(val)){
            var i = parseInt($("#nb_discs").text());
            if(i-val == 0)$("#nb_discs").text(""); 
            else $("#nb_discs").text(i-val);
            
            $("#disc"+discId+" .n_msg").text("");
        }
        if(discussionsListe[''+discId] === undefined){
            discussionsListe[''+discId] = false;
            discussionsIdListe[discussionsIdListe.length] = discId;
            var str = $("#titre"+discId).html();
            if(str.length > 22) str = str.substring(0, 22)+"...";
            $('body').append("<div class='popup-box chat-popup' id='discpop"+discId+"'><div class='popup-head'><div class='popup-head-left pull-left'>"+str+"</div><div class='popup-head-right pull-right'><button data-widget='remove' onclick='closeBox("+discId+")' id='removeClass"+discId+"' class='chat-header-button pull-right' type='button'><i class='glyphicon glyphicon-off'></i></button></div></div><div class='popup-messages'><div style='height: 100%' class='direct-chat-messages' id='discRoom"+discId+"'></div></div><div class='popup-messages-footer'><div style='text-align: center' hidden='hidden' id='loading"+discId+"'><img src='"+loadingGif+"'/></div><form id=discform"+discId+"><input class='form-control' id='text"+discId+"' placeholder='Taper un message...' name='text"+discId+"'/></form><div class='btn-footer'><button class='bg_none' onclick='choisirImage("+discId+");'><i class='glyphicon glyphicon-picture'></i> </button>\n\
<button class='bg_none' onclick='choisirFichier("+discId+");'><i class='glyphicon glyphicon-file'></i> </button></div></div></div>");
            $("#discform"+discId).submit(function(){
                demandeEnvoyerMessage(discId, null);
                return false;
            });
            montrerPopupDiscussion(discId);
            getDiscussionMessages(discId, !isNaN(val));
        }else{

            if(!discussionsListe[''+discId]){
                montrerPopupDiscussion(discId);
                if(!isNaN(val)) getNouveauxMessagesDiscussion(discId);
            }
        }
        
    }
    
    function getDiscussionMessages(discId, checkNew){
	               
		$.post(gdmPath, {'discid' : discId },
			function(data){
				if ( noSession(data.erreur) || noPost(data.erreur) || noParam(data.erreur) ) {
					console.log(data.erreur+':Récupération les messages de la discussion.');
				}
				else if ( isExeption(data.erreur)) {
						console.log(data.erreur+" : Récupération les messages de la discussion. : "+data.ex);
				}
				else{
                                    var cmp = data.length;
					
                                    for (var i = 1; i < cmp; i++){
                                        afficherMessage(data[i], null);
                                    }
                                    
                                    if(checkNew) getNouveauxMessagesDiscussion(discId);
				}
			}, 'json')
		.fail(function(data){
			console.log("Impossible de récupérer les messages de la discussion.");
		});
	}
        
       
    function getDiscussionMessagesContact(contId, discId, checkNew){
          
        $.post(gdmcPath, {'contid' : contId },
            function(data){
                if ( noSession(data.erreur) || noPost(data.erreur) || noParam(data.erreur) ) {
                    console.log(data.erreur+':Récupération les messages de la discussion.: Contact');
		}
		else if ( isExeption(data.erreur)) {
                    console.log(data.erreur+" : Récupération les messages de la discussion. : Contact : "+data.ex);
		}
		else{

                    var cmp = data.length;
                    
                    for (var i = 1; i < cmp; i++) {
                        afficherMessage(data[i], discId);
                    }
                    
                    if(checkNew) getNouveauxMessagesContact(contId);
		}
            }, 'json')
	.fail(function(data){
            console.log("Impossible de récupérer les messages de la discussion: Contact.");
	});        
    }
    
    function envoyerMessageContact(contId, message, discId){
        
        montrerChargementEnvoiMessage(discId);
        
        $.post(emcPath, { 'contenu' : message, 'contid' : contId },
			function(data){
                            if ( noSession(data.erreur) || noPost(data.erreur) || noParam(data.erreur)) {
				console.log(data.erreur+": Envoi de message: Contact");				
                            }
                            else if ( isExeption(data.erreur)) {
				console.log(data.erreur+" : Envoi de message: Contact. : "+data.ex);				
                            }
                            else{
				if(isSucces(data.ok)){
                                    var msg = data.msg;
                                    //************************
                                    var dd = msg.adeux.replace(""+msg.posteur,"");
                                    dd = dd.replace(",","");                                    
                                    if(discussionsListe["c-"+dd] == true){
                                        discId = upDateBox(msg, dd);
                                    }
                                    //***********************************
                                    afficherMessage(msg, null);//afficherMessage(msg, discId);
                                    marquerLuContact(msg.id, contId);
				}
				else{
                                    console.log("Erreur serveur: Impossible d'envoyer le message.: Contact");                                  
                                }
                            }

                            cacherChargementEnvoiMessage(discId);

			}, 'json')
                    .fail(function(data){
			console.log("Impossible d'envoyer le message.: Contact");
			cacherChargementEnvoiMessage(discId);
                    });
    }
    
function getNouveauxMessagesDiscussion(discId){

    $.post(newMsgD, {"discid" : discId},
		function(data){
			if ( noSession(data.erreur)) {
                            console.log(data.erreur+':Récupération des nouveaux méssages.');
			}
			else if ( isExeption(data.erreur)) {
                            console.log(data.erreur+" : Récupération des nouveaux méssages. : "+data.ex);
			}
			else{
                            
                            var cmp = data.length;
                            var maxid = 0;                                                        
                            for (var i = 1; i < cmp; i++) {
                                createDiscussionBox(data[i]);
                                if(data[i].id > maxid) maxid = data[i].id;                                
                            }                            
                            jouerNotificationRoom();
                            marquerLu(maxid, discId);
                            
                        }
		}, 'json')
	.fail(function(data){
		console.log("Impossible de récupérer les nouveaux méssages.");
	});
}

function getNouveauxMessagesContact(contId){

    $.post(newMsgC, {"contid" : contId},
		function(data){
			if ( noSession(data.erreur)) {
                            console.log(data.erreur+':Récupération des nouveaux méssages.');
			}
			else if ( isExeption(data.erreur)) {
                            console.log(data.erreur+" : Récupération des nouveaux méssages. : "+data.ex);
			}
			else{
                            var cmp = data.length;
                            var maxid = 0;                                                        
                            for (var i = 1; i < cmp; i++) {                                
                                createDiscussionBox(data[i]); 
                                if(data[i].id > maxid) maxid = data[i].id;                                
                            }
                            jouerNotificationRoom();
                            marquerLuContact(maxid, contId);
                        }
                    }, 'json')
	.fail(function(data){
		console.log("Impossible de récupérer les nouveaux méssages.");
	});
}


function changer(input){
    $('#selected_image')[0].src = (window.URL ? URL : webkitURL).createObjectURL(input.files[0]);        
}

function choisirImage(discId, contId){    
    $("#legende").val("");
    $("#selected_image").attr("src", "");
    $("#modalEnvoyerImage").modal({
			keyboard: true
                        });
    discIdImage = discId;
    contIdImage = contId;
}

function choisirFichier(discId, contId){    
    $("#legendeFichier").val("");
    $("#modalEnvoyerFichier").modal({
			keyboard: true
                        });
    discIdImage = discId;
    contIdImage = contId;
}


        function demandeEnvoyerImage(){
        
		if( $("#imageAenvoyer").val() !==""){     
                    envoyerImage();
		}
        }
        
        function demandeEnvoyerFichier(){
            var mxsz = 5242880;
		if( $("#fichierAenvoyer").val() !==""){
                    var input = document.getElementById('fichierAenvoyer');
                    if (!input) {
                        console.log("Impossible de trouver l'élement '#fichierAenvoyer'.");
                    }
                    else if (!input.files) {
                        console.log("Désolé, le navigateur semble ne pas supporter les propriétés du file Implut '#fichierAenvoyer'.");
                    }
                    else if (!input.files[0]) {
                        console.log("Aucun fichier sélectionné.");
                    }
                    else {
                        var file = input.files[0];
                        if(mxsz >= file.size) envoyerFichier();
                        else{
                            console.log("Fichier trop lourd: " + file.size/1024/1024 + " Mo > Max size: 5 Mo");
                            alert("Fichier trop lourd: " + file.size/1024/1024 + " Mo > Max size: 5 Mo");
                        }
                    }
		}
        }
        
    function envoyerImage(){
        
        $("#modalEnvoyerImage").modal('hide');
        
        if(isNaN(parseInt(discIdImage))) envoyerMessageContactImage();
        else
        {

            montrerChargementEnvoiMessage();
            
            $("#image_id").val(discIdImage);

            var form = $('#form_image');
            var formdata =  (window.FormData)? new FormData(form[0]) : null;
            var data = (formdata !== null)? formdata : form.serialize();

            $.ajax({
                url: nmiPath,
                type: "POST",
                data: data,
                processData: false,
                contentType: false,
                dataTYpe: 'json',
                beforeSend: function(data){
                    montrerChargementEnvoiMessage();
                }
            })
                    .done(function (data){

                        if ( noSession(data.erreur) || noPost(data.erreur) || noParam(data.erreur)) {
                                    console.log(data.erreur+": Envoi de l'image.");
                                }
                                else if ( isExeption(data.erreur)) {
                                    console.log(data.erreur+" : Envoi de l'image: "+data.ex);
                                }
                                else{
                                    if(isSucces(data.ok)){
                                        var msg = data.msg;
                                        afficherMessage(msg, null);
                                        marquerLu(msg.id, msg.discid);
                                    }
                                    else{
                                        console.log("Erreur serveur: Impossible d'envoyer l'image.");
                                  
                                    }
                                }
                                
                                cacherChargementEnvoiMessage();                                

                    })
                    .fail(function(data){
                        console.log("Image non envoyée!!!");
                    })
                    .always(function (data){
                        cacherChargementEnvoiMessage();
                    });
            }
    }
    
    
    function envoyerFichier(){
        
        $("#modalEnvoyerFichier").modal('hide');
        
        if(isNaN(parseInt(discIdImage))) envoyerMessageContactFichier();
        else
        {

            montrerChargementEnvoiMessage();
            
            $("#fichier_id").val(discIdImage);

            var form = $('#form_fichier');
            var formdata =  (window.FormData)? new FormData(form[0]) : null;
            var data = (formdata !== null)? formdata : form.serialize();

            $.ajax({
                url: nmfPath,
                type: "POST",
                data: data,
                processData: false,
                contentType: false,
                dataTYpe: 'json',
                beforeSend: function(data){
                    montrerChargementEnvoiMessage();
                }
            })
                    .done(function (data){

                        if ( noSession(data.erreur) || noPost(data.erreur) || noParam(data.erreur)) {
                                    console.log(data.erreur+": Envoi du fichier.");
                                }
                                else if ( isExeption(data.erreur)) {
                                    console.log(data.erreur+" : Envoi du fichier: "+data.ex);
                                }
                                else{
                                    if(isSucces(data.ok)){
                                        var msg = data.msg;
                                        afficherMessage(msg, null);
                                        marquerLu(msg.id, msg.discid);
                                    }
                                    else{
                                        console.log("Erreur serveur: Impossible d'envoyer le fichier.");
                                  
                                    }
                                }
                                
                                cacherChargementEnvoiMessage();                                

                    })
                    .fail(function(data){
                        console.log("fichier non envoyée!!!");
                    })
                    .always(function (data){
                        cacherChargementEnvoiMessage();
                    });
            }
    }
    
    
    function envoyerMessageContactImage(){

            montrerChargementEnvoiMessage();
            
            $("#image_id").val(contIdImage);
            var form = $('#form_image');
            var formdata =  (window.FormData)? new FormData(form[0]) : null;
            var data = (formdata !== null)? formdata : form.serialize();

            $.ajax({
                url: nmicPath,
                type: "POST",
                data: data,
                processData: false,
                contentType: false,
                dataTYpe: 'json',
                beforeSend: function(data){
                    montrerChargementEnvoiMessage();
                }
            })
                    .done(function (data){

                        if ( noSession(data.erreur) || noPost(data.erreur) || noParam(data.erreur)) {
                                    console.log(data.erreur+": Envoi de l'image : contact.");
                                
                                }
                                else if ( isExeption(data.erreur)) {
                                    console.log(data.erreur+" : Envoi de l'image. Contact : "+data.ex);
                                    
                                }
                                else{
                                    if(isSucces(data.ok)){
                                        var msg = data.msg;
                                        //************************
                                        var dd = msg.adeux.replace(""+msg.posteur,"");
                                        dd = dd.replace(",","");                                    
                                        if(discussionsListe["c-"+dd] == true){
                                            discId = upDateBox(msg, dd);
                                        }
                                        //***********************************
                                        afficherMessage(msg, null);
                                        marquerLuContact(msg.id, contIdImage);                                        
                                    
                                    }
                                    else{
                                        console.log("Erreur serveur: Impossible d'envoyer l'image. Contact");       
                                    }
                                }
                                
                                cacherChargementEnvoiMessage();                                

                    })
                    .fail(function(data){
                        console.log("Image non envoyée!!! : Contact");
                    })
                    .always(function (data){
                        cacherChargementEnvoiMessage();
                    });        
    }
    
    function envoyerMessageContactFichier(){

            montrerChargementEnvoiMessage();
            
            $("#fichier_id").val(contIdImage);
            var form = $('#form_fichier');
            var formdata =  (window.FormData)? new FormData(form[0]) : null;
            var data = (formdata !== null)? formdata : form.serialize();

            $.ajax({
                url: nmfcPath,
                type: "POST",
                data: data,
                processData: false,
                contentType: false,
                dataTYpe: 'json',
                beforeSend: function(data){
                    montrerChargementEnvoiMessage();
                }
            })
                    .done(function (data){

                        if ( noSession(data.erreur) || noPost(data.erreur) || noParam(data.erreur)) {
                                    console.log(data.erreur+": Envoi du fichier : contact.");
                                
                                }
                                else if ( isExeption(data.erreur)) {
                                    console.log(data.erreur+" : Envoi du fichier. Contact : "+data.ex);
                                    
                                }
                                else{
                                    if(isSucces(data.ok)){
                                        var msg = data.msg;
                                        //************************
                                        var dd = msg.adeux.replace(""+msg.posteur,"");
                                        dd = dd.replace(",","");                                    
                                        if(discussionsListe["c-"+dd] == true){
                                            discId = upDateBox(msg, dd);
                                        }
                                        //***********************************
                                        afficherMessage(msg, null);
                                        marquerLuContact(msg.id, contIdImage);                                        
                                    
                                    }
                                    else{
                                        console.log("Erreur serveur: Impossible d'envoyer le fichier. Contact");       
                                    }
                                }
                                
                                cacherChargementEnvoiMessage();                                

                    })
                    .fail(function(data){
                        console.log("Image non envoyée!!! : Contact");
                    })
                    .always(function (data){
                        cacherChargementEnvoiMessage();
                    });        
    }
    
    function clickImage(id){
        $("#imageAvoir").attr('src',$("#message"+id+" img").attr('src'));
    }
    
    function upDateBox(msg, contId){
        
        $("#removeClassc-"+contId).attr("onclick", "closeBox("+ msg.discid +")");
            $("#removeClassc-"+contId).attr("id", "removeClass"+msg.discid);
                                        
            $("#discRoomc-"+contId).attr("id", "discRoom"+msg.discid);
                                        
            $("#loadingc-"+contId).attr("id", "loading"+msg.discid);
                                        
            $("#discformc-"+contId).attr("onsubmit", "return submitForm("+msg.discid+");");
            $("#discformc-"+contId).attr("id", "discform"+msg.discid);
                                        
             $("#textc-"+contId).attr("name", "text"+msg.discid);
             $("#textc-"+contId).attr("id", "text"+msg.discid);
                                        
             $("#discpopc-"+contId+" .bg_none").attr("onclick", "choisirImage("+ msg.discid+");");
                                        
             $("#discpopc-"+contId).attr("id", "discpop"+msg.discid);
             discussionsListe["c-"+contId] = false;
             discussionsListe[msg.discid] = true;
             
             discussionsIdListe[discussionsIdListe.length] = msg.discid;
             
             $("#discavecid"+contId).text(msg.discid);
             
             return msg.discid;
    }
    
    function submitForm(discId){      
        demandeEnvoyerMessage(discId, null);
        return false;     
    }