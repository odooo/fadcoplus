<?php

namespace FadcoBundle\Entity;

/**
 * MailsEnvoyes
 */
class MailsEnvoyes
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $destinataire;

    /**
     * @var string
     */
    private $fichier;

    /**
     * @var integer
     */
    private $mailId;

    /**
     * @var string
     */
    private $mailFrom;

    /**
     * @var string
     */
    private $objet;

    /**
     * @var string
     */
    private $contenuHTML;

    /**
     * @var string
     */
    private $flag;

    /**
     * @var integer
     */
    private $state;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $userEmail;


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
     * Set destinataire
     *
     * @param string $destinataire
     *
     * @return MailsEnvoyes
     */
    public function setDestinataire($destinataire)
    {
        $this->destinataire = $destinataire;

        return $this;
    }

    /**
     * Get destinataire
     *
     * @return string
     */
    public function getDestinataire()
    {
        return $this->destinataire;
    }

    /**
     * Set fichier
     *
     * @param string $fichier
     *
     * @return MailsEnvoyes
     */
    public function setFichier($fichier)
    {
        $this->fichier = $fichier;

        return $this;
    }

    /**
     * Get fichier
     *
     * @return string
     */
    public function getFichier()
    {
        return $this->fichier;
    }

    /**
     * Set mailId
     *
     * @param integer $mailId
     *
     * @return MailsEnvoyes
     */
    public function setMailId($mailId)
    {
        $this->mailId = $mailId;

        return $this;
    }

    /**
     * Get mailId
     *
     * @return integer
     */
    public function getMailId()
    {
        return $this->mailId;
    }

    /**
     * Set mailFrom
     *
     * @param string $mailFrom
     *
     * @return MailsEnvoyes
     */
    public function setMailFrom($mailFrom)
    {
        $this->mailFrom = $mailFrom;

        return $this;
    }

    /**
     * Get mailFrom
     *
     * @return string
     */
    public function getMailFrom()
    {
        return $this->mailFrom;
    }

    /**
     * Set objet
     *
     * @param string $objet
     *
     * @return MailsEnvoyes
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Get objet
     *
     * @return string
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set contenuHTML
     *
     * @param string $contenuHTML
     *
     * @return MailsEnvoyes
     */
    public function setContenuHTML($contenuHTML)
    {
        $this->contenuHTML = $contenuHTML;

        return $this;
    }

    /**
     * Get contenuHTML
     *
     * @return string
     */
    public function getContenuHTML()
    {
        return $this->contenuHTML;
    }

    /**
     * Set flag
     *
     * @param string $flag
     *
     * @return MailsEnvoyes
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;

        return $this;
    }

    /**
     * Get flag
     *
     * @return string
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * Set state
     *
     * @param integer $state
     *
     * @return MailsEnvoyes
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return integer
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return MailsEnvoyes
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
     * Set userEmail
     *
     * @param string $userEmail
     *
     * @return MailsEnvoyes
     */
    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    /**
     * Get userEmail
     *
     * @return string
     */
    public function getUserEmail()
    {
        return $this->userEmail;
    }
    /**
     * @var \FadcoBundle\Entity\Prestataire
     */
    private $prestataire;


    /**
     * Set prestataire
     *
     * @param \FadcoBundle\Entity\Prestataire $prestataire
     *
     * @return MailsEnvoyes
     */
    public function setPrestataire(\FadcoBundle\Entity\Prestataire $prestataire = null)
    {
        $this->prestataire = $prestataire;

        return $this;
    }

    /**
     * Get prestataire
     *
     * @return \FadcoBundle\Entity\Prestataire
     */
    public function getPrestataire()
    {
        return $this->prestataire;
    }
}
