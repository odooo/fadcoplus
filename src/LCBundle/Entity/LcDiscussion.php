<?php

namespace LCBundle\Entity;

/**
 * LcDiscussion
 */
class LcDiscussion
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $sujet;

    /**
     * @var string
     */
    private $titre;

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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return LcDiscussion
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
     * Set sujet
     *
     * @param string $sujet
     *
     * @return LcDiscussion
     */
    public function setSujet($sujet)
    {
        $this->sujet = $sujet;

        return $this;
    }

    /**
     * Get sujet
     *
     * @return string
     */
    public function getSujet()
    {
        return $this->sujet;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return LcDiscussion
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }
    /**
     * @var \LCBundle\Entity\LcUser
     */
    private $createur;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $intervenants;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->intervenants = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set createur
     *
     * @param \LCBundle\Entity\LcUser $createur
     *
     * @return LcDiscussion
     */
    public function setCreateur(\LCBundle\Entity\LcUser $createur = null)
    {
        $this->createur = $createur;

        return $this;
    }

    /**
     * Get createur
     *
     * @return \LCBundle\Entity\LcUser
     */
    public function getCreateur()
    {
        return $this->createur;
    }

    /**
     * Add intervenant
     *
     * @param \LCBundle\Entity\LcUser $intervenant
     *
     * @return LcDiscussion
     */
    public function addIntervenant(\LCBundle\Entity\LcUser $intervenant)
    {
        $this->intervenants[] = $intervenant;

        return $this;
    }

    /**
     * Remove intervenant
     *
     * @param \LCBundle\Entity\LcUser $intervenant
     */
    public function removeIntervenant(\LCBundle\Entity\LcUser $intervenant)
    {
        $this->intervenants->removeElement($intervenant);
    }

    /**
     * Get intervenants
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIntervenants()
    {
        return $this->intervenants;
    }
    /**
     * @var string
     */
    private $adeux;


    /**
     * Set adeux
     *
     * @param string $adeux
     *
     * @return LcDiscussion
     */
    public function setAdeux($adeux)
    {
        $this->adeux = $adeux;

        return $this;
    }

    /**
     * Get adeux
     *
     * @return string
     */
    public function getAdeux()
    {
        return $this->adeux;
    }
}
