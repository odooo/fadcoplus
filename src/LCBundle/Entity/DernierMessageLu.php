<?php

namespace LCBundle\Entity;

/**
 * DernierMessageLu
 */
class DernierMessageLu
{
    /**
     * @var integer
     */
    private $id;


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
     * @var \LCBundle\Entity\LcMessage
     */
    private $message;

    /**
     * @var \LCBundle\Entity\LcUser
     */
    private $user;

    /**
     * @var \LCBundle\Entity\LcDiscussion
     */
    private $discussion;


    /**
     * Set message
     *
     * @param \LCBundle\Entity\LcMessage $message
     *
     * @return DernierMessageLu
     */
    public function setMessage(\LCBundle\Entity\LcMessage $message = null)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return \LCBundle\Entity\LcMessage
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set user
     *
     * @param \LCBundle\Entity\LcUser $user
     *
     * @return DernierMessageLu
     */
    public function setUser(\LCBundle\Entity\LcUser $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \LCBundle\Entity\LcUser
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set discussion
     *
     * @param \LCBundle\Entity\LcDiscussion $discussion
     *
     * @return DernierMessageLu
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
}
