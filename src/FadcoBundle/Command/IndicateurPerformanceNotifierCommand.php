<?php

namespace FadcoBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


class IndicateurPerformanceNotifierCommand extends ContainerAwareCommand
{
    private $smsSender;

    private $indicateurPerformance;

    protected function configure()
    {
        $this
            ->setName('gsp:indicateur-performance:notify')
            ->setDescription('Envoie les performances journalières des différentes directions aux DGs par SMS et E-mail');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->smsSender = $this->getContainer()->get('gsp.autorites.sms.sender');
        $this->indicateurPerformance = $this->getContainer()->get('gsp.indicateur_performance');

        $this->sendDSCPerformances();
        $this->sendDAIPerformances();
        $this->sendDSAVPerformances();
        $this->sendDSJPerformances();
    }

    public function sendDSCPerformances()
    {
        // Nombre de clients reçu dans la journée
        $msg = sprintf(
            "Clients reçus dans la journée du %s\nNouveaux Clients: %d\nAnciens Clients: %d",
            date('d/m/Y'),
            $this->indicateurPerformance->countNouveauxClientsRecus(),
            $this->indicateurPerformance->countAnciensClientsRecus()
        );

        $this->smsSender->message($msg)->to('pdg', 'dg', 'dsc');

        // Nombre de client ayant reçu un proformat
        $msg = sprintf(
            "Clients ayant reçus un proformat dans la journée du %s : %d",
            date('d/m/Y'),
            $this->indicateurPerformance->countProformat()
        );

        $this->smsSender->message($msg)->to('pdg', 'dg', 'dsc');

        // Nombre de clients ayant visité de biens
        $msg = sprintf(
            "Clients ayant visité de bien dans la journée du %s : %d",
            date('d/m/Y'),
            $this->indicateurPerformance->countClientAyantVisite()
        );

        $this->smsSender->message($msg)->to('pdg', 'dg', 'dsc');

        list($zones, $carateristiques, $budgets) = $this->indicateurPerformance->nbrClientAttenteBiens();
        // Nombre de clients en attente de biens non disponible par caractéristiques
        $msg = sprintf(
            "Clients en attente de biens non encore disponible par caractéristiques dans la journée du %s:\n",
            date('d/m/Y')
        );

        foreach ($carateristiques as $carateristique) {
            $msg = sprintf("%s\n%s: %s\n", $msg, $carateristique['label'], $carateristique['value']);
        }

        $this->smsSender->message($msg)->to('pdg', 'dg', 'dsc');

        // Nombre de clients en attente de biens non disponible par zones
        $msg = sprintf(
            "Clients en attente de biens non encore disponible par zones dans la journée du %s:\n",
            date('d/m/Y')
        );

        foreach ($zones as $zone) {
            $msg = sprintf("%s\n%s: %s\n", $msg, $zone['label'], $zone['value']);
        }

        $this->smsSender->message($msg)->to('pdg', 'dg', 'dsc');

        // Nombre de clients en attente de biens non disponible par budgets
        $msg = sprintf(
            "Clients en attente de biens non encore disponible par budgets dans la journée du %s:\n",
            date('d/m/Y')
        );

        foreach ($budgets as $budget) {
            $msg = sprintf("%s\n%s: %s\n", $msg, $budget['label'], $budget['value']);
        }

        $this->smsSender->message($msg)->to('pdg', 'dg', 'dsc');

        // Nombre de clients reçu par canal
        $canaux = $this->indicateurPerformance->countClientByCanal();

        $msg = sprintf(
            "Clients reçus par canal de communication dans la journée du %s:\n",
            date('d/m/Y')
        );

        foreach ($canaux as $canal) {
            $msg = sprintf("%s\n%s: %s\n", $msg, $canal['label'], $canal['value']);
        }

        $this->smsSender->message($msg)->to('pdg', 'dg', 'dsc');

        // Satisfaction des clients après visite
        $satisfactions = $this->indicateurPerformance->satisfactionAccueil();

        $msg = sprintf(
            "Satisfaction des clients après visite dans la journée du %s:\n",
            date('d/m/Y')
        );

        foreach ($satisfactions as $satisfaction) {
            $msg = sprintf("%s\n%s: %s\n", $msg, $satisfaction['label'], $satisfaction['value']);
        }

        $this->smsSender->message($msg)->to('pdg', 'dg', 'dsc');

        // Nombre de clients reçus par direction
        $directions = $this->indicateurPerformance->satisfactionAccueil();

        $msg = sprintf(
            "Nombre de clients reçus par direction dans la journée du %s:\n",
            date('d/m/Y')
        );

        foreach ($directions as $direction) {
            $msg = sprintf("%s\n%s: %s\n", $msg, $direction['label'], $direction['value']);
        }

        $this->smsSender->message($msg)->to('pdg', 'dg', 'dsc');
    }

    public function sendDAIPerformances()
    {
        // Nombre de biens prise en charge sur sollicitation des proprios
        $msg = sprintf(
            "Nombre de biens prise en charge sur sollicitation des propriétaires dans la journée du %s : %d",
            date('d/m/Y'),
            $this->indicateurPerformance->countBienProvisoire()
        );


        $this->smsSender->message($msg)->to('pdg', 'dg', 'dai');

        // Nombre de biens prise en charge par requete du commercial
        $msg = sprintf(
            "Nombre de biens prise en charge par requete du commercial dans la journée du %s : %d",
            date('d/m/Y'),
            $this->indicateurPerformance->countRequeteBienPriseEnCharge()
        );        

        $this->smsSender->message($msg)->to('pdg', 'dg', 'dai');

        // Nombre de biens prise en charge par recherche stratégique
        $msg = sprintf(
            "Nombre de biens prise en charge par recherche stratégique dans la journée du %s : %d",
            date('d/m/Y'),
            $this->indicateurPerformance->countBienStrategique()
        );        

        $this->smsSender->message($msg)->to('pdg', 'dg', 'dai');

        // Nombre de biens validé
        $msg = sprintf(
            "Nombre de biens validés dans la journée du %s : %d",
            date('d/m/Y'),
            $this->indicateurPerformance->nbreBiensValides()
        );        

        $this->smsSender->message($msg)->to('pdg', 'dg', 'dai');

        // Nombre de contrats signés
        $msg = sprintf(
            "Nombre de contrats signés dans la journée du %s : %d",
            date('d/m/Y'),
            $this->indicateurPerformance->getNbreContratSignes()
        );        

        $this->smsSender->message($msg)->to('pdg', 'dg', 'dai');
    }

    public function sendDSAVPerformances()
    {
        // dossiers bouclés Transmis par les Juristes
        $msg = sprintf(
            "Nombre de dossiers bouclés Transmis par les Juristes dans la journée du %s : %d",
            date('d/m/Y'),
            $this->indicateurPerformance->nbreDossierJuristeBoucle()
        );        

        $this->smsSender->message($msg)->to('pdg', 'dg', 'dsav');

        // dossiers bouclés Transmis par les Juristes
        $msg = sprintf(
            "Nombre clients ayant commandé et payé pour les plaques et bornes dans la journée du %s : %d",
            date('d/m/Y'),
            $this->indicateurPerformance->nbreClientPlaqueEtBorne()
        );        

        $this->smsSender->message($msg)->to('pdg', 'dg', 'dsav');

        // Nombre de clients indisponibles pour le retrait
        $msg = sprintf(
            "Nombre de clients indisponibles pour le retrait dans la journée du %s : %d",
            date('d/m/Y'),
            $this->indicateurPerformance->nbrClientIndisponible()
        );        

        $this->smsSender->message($msg)->to('pdg', 'dg', 'dsav');

        // Nombre de clients ayant pris rendez-vous pour le retrait
        $msg = sprintf(
            "Nombre de clients ayant pris rendez-vous pour le retrait dans la journée du %s : %d",
            date('d/m/Y'),
            $this->indicateurPerformance->nbrClientDisponible()
        );        

        $this->smsSender->message($msg)->to('pdg', 'dg', 'dsav');

        // Nombre de clients ayant effectivement retiré leurs titres de propriété
        $msg = sprintf(
            "Nombre de clients ayant effectivement retiré leurs titres de propriété dans la journée du %s : %d",
            date('d/m/Y'),
            $this->indicateurPerformance->nbrClientAyantRetire()
        );        

        $this->smsSender->message($msg)->to('pdg', 'dg', 'dsav');

        // Nombre de clients ayant visités leurs bornes
        $msg = sprintf(
            "Nombre de clients ayant visités leurs bornes dans la journée du %s : %d",
            date('d/m/Y'),
            $this->indicateurPerformance->getVisiteBorne()
        );        

        $this->smsSender->message($msg)->to('pdg', 'dg', 'dsav');

        // Nombre de clients en attente de visités de leurs bornes
        $msg = sprintf(
            "Nombre de clients en attente de visités de leurs bornes dans la journée du %s : %d",
            date('d/m/Y'),
            $this->indicateurPerformance->getVisiteAttenteBorne()
        );        

        $this->smsSender->message($msg)->to('pdg', 'dg', 'dsav');
    }

    public function sendDSJPerformances()
    {
        // Nombre de dossiers recus par traitement
        $msg = sprintf(
            "Nombre de dossiers reçus par traitement dans la journée du %s : %d",
            date('d/m/Y'),
            $this->indicateurPerformance->nbreDossiersRecusTraitement()
        );        

        $this->smsSender->message($msg)->to('pdg', 'dg', 'dsj');

        // Dossiers retournés à la DSAV pour correction
        $msg = sprintf(
            "Nombre dossiers retournés à la DSAV pour correction dans la journée du %s : %d",
            date('d/m/Y'),
            $this->indicateurPerformance->nbreDossiersRetournesCorrection()
        );        

        $this->smsSender->message($msg)->to('pdg', 'dg', 'dsj');

        // Dossiers libérés dans les délais
        $msg = sprintf(
            "Nombre dossiers libérés dans les délais dans la journée du %s : %d",
            date('d/m/Y'),
            $this->indicateurPerformance->nbreDossiersLiberesDelais()
        );        

        $this->smsSender->message($msg)->to('pdg', 'dg', 'dsj');

        // Dossiers de formalités en Souffrance chez le notaire
        $msg = sprintf(
            "Nombre de dossiers de formalités en Souffrance chez le notaire dans la journée du %s : %d",
            date('d/m/Y'),
            $this->indicateurPerformance->nbreDossiersEnSoufrance()
        );        

        $this->smsSender->message($msg)->to('pdg', 'dg', 'dsj');
    }
}

