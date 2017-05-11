<?php

namespace LCBundle\Entity;

/**
 * LcMessage
 */
class LcMessage
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
    private $contenu;

    /**
     * @var string
     */
    private $type;


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
     * @return LcMessage
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
     * Set contenu
     *
     * @param string $contenu
     *
     * @return LcMessage
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return LcMessage
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
     * @var \LCBundle\Entity\LcDiscussion
     */
    private $discussion;


    /**
     * Set discussion
     *
     * @param \LCBundle\Entity\LcDiscussion $discussion
     *
     * @return LcMessage
     */
    public function setDiscussion(\LCBundle\Entity\LcDiscussion $discussion = null)
    {
        $this->discussion = $discussion;

        return $this;
    }

    /**
     * Get discussion
     *
     * @return \LCBundle\Entity\LcDiscussion
     */
    public function getDiscussion()
    {
        return $this->discussion;
    }
    /**
     * @var \LCBundle\Entity\LcUser
     */
    private $posteur;


    /**
     * Set posteur
     *
     * @param \LCBundle\Entity\LcUser $posteur
     *
     * @return LcMessage
     */
    public function setPosteur(\LCBundle\Entity\LcUser $posteur = null)
    {
        $this->posteur = $posteur;

        return $this;
    }

    /**
     * Get posteur
     *
     * @return \LCBundle\Entity\LcUser
     */
    public function getPosteur()
    {
        return $this->posteur;
    }
    /**
     * @var string
     */
    private $file = '';


    /**
     * Set file
     *
     * @param string $file
     *
     * @return LcMessage
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }
}
