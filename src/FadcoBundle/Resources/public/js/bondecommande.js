/**
 * Gestion de la planification des missions
 * d'un bon de commande mensuel
 * 
 * @author Eldo Magan <magan.eldo@gmail.com>
 */

!(function ($, bot) {

    var 
        $planificationModal = $('#planification-mission-modal'),
        $btnBack = $planificationModal.find('.btn-back'),
        $btnNext = $planificationModal.find('.btn-next'),

        missionPrototype = $('#mission-prototype').html(),
        datePrototype = $('#date-prototype').html()
    ;

    var bonDeCommande, missions = [];
    var currentMissionIndex = 0;

    $(function() {

        $btnBack.attr('disabled', true);
        $btnNext.attr('disabled', true);

        $('.action-accept-visa').on('click', function (e) {
            e.preventDefault();

            $planificationModal.find('.modal-body').html('<div class="cssload-loader" style="margin-top: 0px;"></div>')
            $planificationModal.modal('show');

            $.ajax({
                type: 'GET',
                url: $(this).attr('href'),
                dataType: 'json'
            })
            .done(function (response) {
                $planificationModal.find('.modal-body').html('');
                $btnBack.attr('disabled', false);              
                
                bonDeCommande = response;
                planMission(bonDeCommande.missions[currentMissionIndex++]);

                $btnBack.on('click', function (e) {                        
                    if (currentMissionIndex == 1) {
                        $planificationModal.modal('hide')
                        missions = [];
                        currentMissionIndex = 0;
                    } else {
                        missions.pop();
                        planMission(bonDeCommande.missions[--currentMissionIndex]);   
                    }
                })                
            })
            .fail(function (error) {
                console.log(error.responseText);
            });
        });
    });

    function planMission(mission) {

        var $mission = $(missionPrototype.replace(/__mission_index__/g, currentMissionIndex).replace(/__designation__/g, mission.designation));

        $planificationModal.find('.modal-body').html($mission)
        $btnNext.attr('disabled', true);

        if (currentMissionIndex == bonDeCommande.missions.length)  {
            $btnNext.text('Accepter le visa');
        } else {
            $btnNext.text('Mission suivante');
        }

        $mission.find('input:radio[name=mode_planification]').on('change', function (e) {

            mission['mode'] = this.value;

            if (this.value == 'periodique') {
                $mission.find('.planification_periodique_content').fadeIn();
                $btnNext.attr('disabled', true);
            } else {
                $mission.find('.planification_periodique_content').fadeOut();
                $btnNext.attr('disabled', false);
            }
        })

        $mission.find('.btn-add-date').on('click', function (e) {

            if (mission.mode == 'periodique') {                
                $date = $(datePrototype);
                
                var maxDate = new Date();
                maxDate.setDate(25);

                console.log(maxDate.getDate());

                $date.datepicker({
                    format: 'dd/mm/yyyy',
                    minDate: new Date(),
                    maxDate: maxDate,                    
                });

                $mission.find('.dates').append($date);

                $date.find('.date-remove').css('cursor', 'pointer').on('click', function () {
                    $(this).datepicker('remove');
                    $(this).closest('.date').remove();
                    if ($mission.find('.date').length == 0) {
                        $btnNext.attr('disabled', true);
                    }
                })
            }

            if ($mission.find('.date').length > 0) {
                $btnNext.attr('disabled', false);
            } else {
                $btnNext.attr('disabled', true);
            }
        })

        $btnNext.off('click');
        $btnNext.on('click', function () {

            if (mission.mode == 'periodique') {
                mission['dates'] = [];

                $mission.find('input.date-text').each(function () {
                    mission.dates.push($(this).val());
                })
            }

            missions.push(mission);

            if (currentMissionIndex == bonDeCommande.missions.length) {                
                console.log(missions);
                savePlanification();
            } else {                
                planMission(bonDeCommande.missions[currentMissionIndex++]);
            }
        })                     
    }

    function savePlanification() {

        $planificationModal.find('.modal-body').html('<div class="cssload-loader" style="margin-top: 0px;"></div>');
        $btnNext.attr('disabled', true);

        $.ajax({
            type: 'POST',
            url: bot.generateUrl('grh_bondecommande_save_planification'),
            data: {
                id: bonDeCommande.id,
                missions: missions,
            },
            dataType: 'json'
        })
        .done(function (response) {
            if (response.success) {
                $planificationModal.find('.modal-body').html('<div class="alert alert-success">Bon de commande planifié avec success</div>');
                setTimeout(function () {
                    window.location.reload();
                }, 3000);
            }
        })
        .fail(function (error) {
            console.log(error.responseText);
        });
    }

})(jQuery, GspBot);