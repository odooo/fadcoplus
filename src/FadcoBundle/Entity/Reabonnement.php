<?php

namespace FadcoBundle\Entity;

/**
 * Reabonnement
 */
class Reabonnement
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $formule;

    /**
     * @var string
     */
    private $duree;

    /**
     * @var integer
     */
    private $montant;

    /**
     * @var string
     */
    private $numeroCarte;

    /**
     * @var string
     */
    private $contact;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $options;

    /**
     * @var string
     */
    private $abonne;

    /**
     * @var \FadcoBundle\Entity\Prestataire
     */
    private $distributeur;

    /**
     * @var \FadcoBundle\Entity\Prestataire
     */
    private $valideur;

    /**
     * @var \DateTime
     */
    private $dateEcheance;


    public function __construct()
    {
        $this->montant = 0;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set formule
     *
     * @param string $formule
     *
     * @return Reabonnement
     */
    public function setFormule($formule)
    {
        $this->formule = $formule;

        return $this;
    }

    /**
     * Get formule
     *
     * @return string
     */
    public function getFormule()
    {
        return $this->formule;
    }

    /**
     * Set duree
     *
     * @param string $duree
     *
     * @return Reabonnement
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree
     *
     * @return string
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set options
     *
     * @param string $options
     *
     * @return Reabonnement
     */
    public function setOptions($options)
    {
        $this->options = $options;

        return $this;
    }

    /**
     * Get options
     *
     * @return string
     */
    public function getOptions()
    {
        return $this->options;
    }


    /**
     * Set montant
     *
     * @param integer $montant
     *
     * @return Reabonnement
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;

        return $this;
    }

    /**
     * Get montant
     *
     * @return integer
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set abonne
     *
     * @param string $abonne
     *
     * @return Reabonnement
     */
    public function setAbonne($abonne)
    {
        $this->abonne = $abonne;

        return $this;
    }

    /**
     * Get abonne
     *
     * @return string
     */
    public function getAbonne()
    {
        return $this->abonne;
    }

    /**
     * Set numeroCarte
     *
     * @param string $numeroCarte
     *
     * @return Reabonnement
     */
    public function setNumeroCarte($numeroCarte)
    {
        $this->numeroCarte = $numeroCarte;

        return $this;
    }

    /**
     * Get numeroCarte
     *
     * @return string
     */
    public function getNumeroCarte()
    {
        return $this->numeroCarte;
    }

    /**
     * Set contact
     *
     * @param string $contact
     *
     * @return Reabonnement
     */
    public function setContact($contact)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return string
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Reabonnement
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
     * Set distributeur
     *
     * @param \FadcoBundle\Entity\Prestataire $distributeur
     *
     * @return Reabonnement
     */
    public function setDistributeur(\FadcoBundle\Entity\Prestataire $distributeur = null)
    {
        $this->distributeur = $distributeur;

        return $this;
    }

    /**
     * Get distributeur
     *
     * @return \FadcoBundle\Entity\Prestataire
     */
    public function getDistributeur()
    {
        return $this->distributeur;
    }

    /**
     * Set valideur
     *
     * @param \FadcoBundle\Entity\Prestataire $valideur
     *
     * @return Reabonnement
     */
    public function setValideur(\FadcoBundle\Entity\Prestataire $valideur = null)
    {
        $this->valideur = $valideur;
    
        return $this;
    }

    /**
     * Get valideur
     *
     * @return \FadcoBundle\Entity\Prestataire
     */
    public function getValideur()
    {
        return $this->valideur;
    }

    /**
     * Set dateEcheance
     *
     * @param \DateTime $dateEcheance
     *
     * @return Reabonnement
     */
    public function setDateEcheance($dateEcheance)
    {
        $this->dateEcheance = $dateEcheance;
    
        return $this;
    }

    /**
     * Get dateEcheance
     *
     * @return \DateTime
     */
    public function getDateEcheance()
    {
        return $this->dateEcheance;
    }
    /**
     * @var \DateTime
     */
    private $dateValide;


    /**
     * Set dateValide
     *
     * @param \DateTime $dateValide
     *
     * @return Reabonnement
     */
    public function setDateValide($dateValide)
    {
        $this->dateValide = $dateValide;
    
        return $this;
    }

    /**
     * Get dateValide
     *
     * @return \DateTime
     */
    public function getDateValide()
    {
        return $this->dateValide;
    }
    /**
     * @var string
     */
    private $numeroAbonne;


    /**
     * Set numeroAbonne
     *
     * @param string $numeroAbonne
     *
     * @return Reabonnement
     */
    public function setNumeroAbonne($numeroAbonne)
    {
        $this->numeroAbonne = $numeroAbonne;
    
        return $this;
    }

    /**
     * Get numeroAbonne
     *
     * @return string
     */
    public function getNumeroAbonne()
    {
        return $this->numeroAbonne;
    }
}
