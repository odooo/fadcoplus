<?php

namespace FadcoBundle\Entity;

/**
 * Complement
 */
class Complement
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var float
     */
    private $montant;

    /**
     * @var string
     */
    private $options;


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
     * Set montant
     *
     * @param float $montant
     *
     * @return Complement
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
    
        return $this;
    }

    /**
     * Get montant
     *
     * @return float
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set options
     *
     * @param string $options
     *
     * @return Complement
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
     * @var string
     */
    private $formule;

    /**
     * @var \FadcoBundle\Entity\Prestataire
     */
    private $distributeur;

    /**
     * @var \FadcoBundle\Entity\Reabonnement
     */
    private $reabo;


    /**
     * Set formule
     *
     * @param string $formule
     *
     * @return Complement
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
     * Set distributeur
     *
     * @param \FadcoBundle\Entity\Prestataire $distributeur
     *
     * @return Complement
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
     * Set reabo
     *
     * @param \FadcoBundle\Entity\Reabonnement $reabo
     *
     * @return Complement
     */
    public function setReabo(\FadcoBundle\Entity\Reabonnement $reabo = null)
    {
        $this->reabo = $reabo;
    
        return $this;
    }

    /**
     * Get reabo
     *
     * @return \FadcoBundle\Entity\Reabonnement
     */
    public function getReabo()
    {
        return $this->reabo;
    }
    /**
     * @var string
     */
    private $oldFormule;

    /**
     * @var string
     */
    private $oldOptions;


    /**
     * Set oldFormule
     *
     * @param string $oldFormule
     *
     * @return Complement
     */
    public function setOldFormule($oldFormule)
    {
        $this->oldFormule = $oldFormule;
    
        return $this;
    }

    /**
     * Get oldFormule
     *
     * @return string
     */
    public function getOldFormule()
    {
        return $this->oldFormule;
    }

    /**
     * Set oldOptions
     *
     * @param string $oldOptions
     *
     * @return Complement
     */
    public function setOldOptions($oldOptions)
    {
        $this->oldOptions = $oldOptions;
    
        return $this;
    }

    /**
     * Get oldOptions
     *
     * @return string
     */
    public function getOldOptions()
    {
        return $this->oldOptions;
    }
    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var \FadcoBundle\Entity\Prestataire
     */
    private $valideur;


    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Complement
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
     * Set valideur
     *
     * @param \FadcoBundle\Entity\Prestataire $valideur
     *
     * @return Complement
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
     * @var \DateTime
     */
    private $dateEcheance;


    /**
     * Set dateEcheance
     *
     * @param \DateTime $dateEcheance
     *
     * @return Complement
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
     * @return Complement
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
    private $abonne;

    /**
     * @var string
     */
    private $contact;

    /**
     * @var string
     */
    private $numeroCarte;

    /**
     * @var string
     */
    private $numeroAbonne;


    /**
     * Set abonne
     *
     * @param string $abonne
     *
     * @return Complement
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
     * Set contact
     *
     * @param string $contact
     *
     * @return Complement
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
     * Set numeroCarte
     *
     * @param string $numeroCarte
     *
     * @return Complement
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
     * Set numeroAbonne
     *
     * @param string $numeroAbonne
     *
     * @return Complement
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
