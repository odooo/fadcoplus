<?php

namespace FadcoBundle\Entity;

/**
 * Repair
 */
class Repair
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $type;

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
    private $lieu;

    /**
     * @var string
     */
    private $forme;

    /**
     * @var string
     */
    private $endroit;

    /**
     * @var integer
     */
    private $montant;

    /**
     * @var \FadcoBundle\Entity\Prestataire
     */
    private $distributeur;

    /**
     * @var \DateTime
     */
    private $date;


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
     * Set type
     *
     * @param string $type
     *
     * @return Repair
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set abonne
     *
     * @param string $abonne
     *
     * @return Repair
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
     * @return Repair
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
     * Set lieu
     *
     * @param string $lieu
     *
     * @return Repair
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return string
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Set forme
     *
     * @param string $forme
     *
     * @return Repair
     */
    public function setForme($forme)
    {
        $this->forme = $forme;

        return $this;
    }

    /**
     * Get forme
     *
     * @return string
     */
    public function getForme()
    {
        return $this->forme;
    }

    /**
     * Set endroit
     *
     * @param string $endroit
     *
     * @return Repair
     */
    public function setEndroit($endroit)
    {
        $this->endroit = $endroit;

        return $this;
    }

    /**
     * Get endroit
     *
     * @return string
     */
    public function getEndroit()
    {
        return $this->endroit;
    }

    /**
     * Set montant
     *
     * @param integer $montant
     *
     * @return Repair
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
     * Set distributeur
     *
     * @param \FadcoBundle\Entity\Prestataire $distributeur
     *
     * @return Repair
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Repair
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
}
