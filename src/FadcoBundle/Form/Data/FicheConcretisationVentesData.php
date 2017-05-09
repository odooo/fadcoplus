<?php

namespace GSPBundle\Entity;

/**
 * FicheConcretisationVentes
 */
class FicheConcretisationVentes
{    
    /**
     * @var string
     */
    private $numero;

    /**
     * @var string
     */
    private $representant;

    /**
     * @var boolean
     */
    private $aimeBien;

    /**
     * @var \DateTime
     */
    private $dateSolde;

    /**
     * @var string
     */
    private $raisons;

    /**
     * @var boolean
     */
    private $visiteAutresSites;

    /**
     * @var \DateTime
     */
    private $dateVisiteAutresSites;

    /**
     * @var string
     */
    private $criteresAutresPropositions;

    /**
     * @var float
     */
    private $prixRemonter;

    /**
     * @var string
     */
    private $queNotAime;

    /**
     * @var string
     */
    private $autresObservations;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var \GSPBundle\Entity\Interaction
     */
    private $interaction;    

    /**
     * @var string
     */
    private $zoneReprecisees;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $biens;    

    /**
     * Set numero
     *
     * @param string $numero
     *
     * @return FicheConcretisationVentes
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set representant
     *
     * @param string $representant
     *
     * @return FicheConcretisationVentes
     */
    public function setRepresentant($representant)
    {
        $this->representant = $representant;

        return $this;
    }

    /**
     * Get representant
     *
     * @return string
     */
    public function getRepresentant()
    {
        return $this->representant;
    }

    /**
     * Set aimeBien
     *
     * @param boolean $aimeBien
     *
     * @return FicheConcretisationVentes
     */
    public function setAimeBien($aimeBien)
    {
        $this->aimeBien = $aimeBien;

        return $this;
    }

    /**
     * Get aimeBien
     *
     * @return boolean
     */
    public function getAimeBien()
    {
        return $this->aimeBien;
    }

    /**
     * Set dateSolde
     *
     * @param \DateTime $dateSolde
     *
     * @return FicheConcretisationVentes
     */
    public function setDateSolde($dateSolde)
    {
        $this->dateSolde = $dateSolde;

        return $this;
    }

    /**
     * Get dateSolde
     *
     * @return \DateTime
     */
    public function getDateSolde()
    {
        return $this->dateSolde;
    }

    /**
     * Set raisons
     *
     * @param string $raisons
     *
     * @return FicheConcretisationVentes
     */
    public function setRaisons($raisons)
    {
        $this->raisons = $raisons;

        return $this;
    }

    /**
     * Get raisons
     *
     * @return string
     */
    public function getRaisons()
    {
        return $this->raisons;
    }

    /**
     * Set visiteAutresSites
     *
     * @param boolean $visiteAutresSites
     *
     * @return FicheConcretisationVentes
     */
    public function setVisiteAutresSites($visiteAutresSites)
    {
        $this->visiteAutresSites = $visiteAutresSites;

        return $this;
    }

    /**
     * Get visiteAutresSites
     *
     * @return boolean
     */
    public function getVisiteAutresSites()
    {
        return $this->visiteAutresSites;
    }

    /**
     * Set dateVisiteAutresSites
     *
     * @param \DateTime $dateVisiteAutresSites
     *
     * @return FicheConcretisationVentes
     */
    public function setDateVisiteAutresSites($dateVisiteAutresSites)
    {
        $this->dateVisiteAutresSites = $dateVisiteAutresSites;

        return $this;
    }

    /**
     * Get dateVisiteAutresSites
     *
     * @return \DateTime
     */
    public function getDateVisiteAutresSites()
    {
        return $this->dateVisiteAutresSites;
    }

    /**
     * Set criteresAutresPropositions
     *
     * @param string $criteresAutresPropositions
     *
     * @return FicheConcretisationVentes
     */
    public function setCriteresAutresPropositions($criteresAutresPropositions)
    {
        $this->criteresAutresPropositions = $criteresAutresPropositions;

        return $this;
    }

    /**
     * Get criteresAutresPropositions
     *
     * @return string
     */
    public function getCriteresAutresPropositions()
    {
        return $this->criteresAutresPropositions;
    }

    /**
     * Set prixRemonter
     *
     * @param float $prixRemonter
     *
     * @return FicheConcretisationVentes
     */
    public function setPrixRemonter($prixRemonter)
    {
        $this->prixRemonter = $prixRemonter;

        return $this;
    }

    /**
     * Get prixRemonter
     *
     * @return float
     */
    public function getPrixRemonter()
    {
        return $this->prixRemonter;
    }

    /**
     * Set queNotAime
     *
     * @param string $queNotAime
     *
     * @return FicheConcretisationVentes
     */
    public function setQueNotAime($queNotAime)
    {
        $this->queNotAime = $queNotAime;

        return $this;
    }

    /**
     * Get queNotAime
     *
     * @return string
     */
    public function getQueNotAime()
    {
        return $this->queNotAime;
    }

    /**
     * Set autresObservations
     *
     * @param string $autresObservations
     *
     * @return FicheConcretisationVentes
     */
    public function setAutresObservations($autresObservations)
    {
        $this->autresObservations = $autresObservations;

        return $this;
    }

    /**
     * Get autresObservations
     *
     * @return string
     */
    public function getAutresObservations()
    {
        return $this->autresObservations;
    }    

    /**
     * Set interaction
     *
     * @param \GSPBundle\Entity\Interaction $interaction
     *
     * @return FicheConcretisationVentes
     */
    public function setInteraction(\GSPBundle\Entity\Interaction $interaction = null)
    {
        $this->interaction = $interaction;

        return $this;
    }

    /**
     * Get interaction
     *
     * @return \GSPBundle\Entity\Interaction
     */
    public function getInteraction()
    {
        return $this->interaction;
    }

    /**
     * Set visiteurs
     *
     * @param \GSPBundle\Entity\Visiteurs $visiteurs
     *
     * @return FicheConcretisationVentes
     */
    public function setVisiteurs(\GSPBundle\Entity\Visiteurs $visiteurs = null)
    {
        $this->visiteurs = $visiteurs;

        return $this;
    }

    /**
     * Get visiteurs
     *
     * @return \GSPBundle\Entity\Visiteurs
     */
    public function getVisiteurs()
    {
        return $this->visiteurs;
    }

    /**
     * Set prestataire
     *
     * @param \GSPBundle\Entity\Prestataire $prestataire
     *
     * @return FicheConcretisationVentes
     */
    public function setPrestataire(\GSPBundle\Entity\Prestataire $prestataire = null)
    {
        $this->prestataire = $prestataire;

        return $this;
    }

    /**
     * Get prestataire
     *
     * @return \GSPBundle\Entity\Prestataire
     */
    public function getPrestataire()
    {
        return $this->prestataire;
    }


    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return FicheConcretisationVentes
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }        

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->bien = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set zoneReprecisees
     *
     * @param string $zoneReprecisees
     *
     * @return FicheConcretisationVentes
     */
    public function setZoneReprecisees($zoneReprecisees)
    {
        $this->zoneReprecisees = $zoneReprecisees;

        return $this;
    }

    /**
     * Get zoneReprecisees
     *
     * @return string
     */
    public function getZoneReprecisees()
    {
        return $this->zoneReprecisees;
    }
    /**
     * @var string
     */
    private $prefereBien;


    /**
     * Set prefereBien
     *
     * @param string $prefereBien
     *
     * @return FicheConcretisationVentes
     */
    public function setPrefereBien($prefereBien)
    {
        $this->prefereBien = $prefereBien;

        return $this;
    }

    /**
     * Get prefereBien
     *
     * @return string
     */
    public function getPrefereBien()
    {
        return $this->prefereBien;
    }        

    /**
     * Add bien
     *
     * @param \GSPBundle\Entity\Bien $bien
     *
     * @return FicheConcretisationVentes
     */
    public function addBien(\GSPBundle\Entity\Bien $bien)
    {
        $this->biens[] = $bien;

        return $this;
    }

    /**
     * Remove bien
     *
     * @param \GSPBundle\Entity\Bien $bien
     */
    public function removeBien(\GSPBundle\Entity\Bien $bien)
    {
        $this->biens->removeElement($bien);
    }

    /**
     * Get biens
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBiens()
    {
        return $this->biens;
    }
}
