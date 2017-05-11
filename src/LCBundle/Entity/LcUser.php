<?php

namespace LCBundle\Entity;

/**
 * LcUser
 */
class LcUser
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $idoriginal;

    /**
     * @var \DateTime
     */
    private $derniereconnexion;


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
     * Set idoriginal
     *
     * @param integer $idoriginal
     *
     * @return LcUser
     */
    public function setIdoriginal($idoriginal)
    {
        $this->idoriginal = $idoriginal;

        return $this;
    }

    /**
     * Get idoriginal
     *
     * @return integer
     */
    public function getIdoriginal()
    {
        return $this->idoriginal;
    }

    /**
     * Set derniereconnexion
     *
     * @param \DateTime $derniereconnexion
     *
     * @return LcUser
     */
    public function setDerniereconnexion($derniereconnexion)
    {
        $this->derniereconnexion = $derniereconnexion;

        return $this;
    }

    /**
     * Get derniereconnexion
     *
     * @return \DateTime
     */
    public function getDerniereconnexion()
    {
        return $this->derniereconnexion;
    }
    /**
     * @var \LCBundle\Entity\LcMessage
     */
    private $derniermessagelu;


    /**
     * Set derniermessagelu
     *
     * @param \LCBundle\Entity\LcMessage $derniermessagelu
     *
     * @return LcUser
     */
    public function setDerniermessagelu(\LCBundle\Entity\LcMessage $derniermessagelu = null)
    {
        $this->derniermessagelu = $derniermessagelu;

        return $this;
    }

    /**
     * Get derniermessagelu
     *
     * @return \LCBundle\Entity\LcMessage
     */
    public function getDerniermessagelu()
    {
        return $this->derniermessagelu;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $discussions;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->discussions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add discussion
     *
     * @param \LCBundle\Entity\LcDiscussion $discussion
     *
     * @return LcUser
     */
    public function addDiscussion(\LCBundle\Entity\LcDiscussion $discussion)
    {
        $this->discussions[] = $discussion;

        return $this;
    }

    /**
     * Remove discussion
     *
     * @param \LCBundle\Entity\LcDiscussion $discussion
     */
    public function removeDiscussion(\LCBundle\Entity\LcDiscussion $discussion)
    {
        $this->discussions->removeElement($discussion);
    }

    /**
     * Get discussions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDiscussions()
    {
        return $this->discussions;
    }

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return LcUser
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return LcUser
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }
}
