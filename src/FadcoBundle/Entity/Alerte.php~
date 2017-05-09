<?php

namespace FadcoBundle\Entity;

/**
 * Alerte
 */
class Alerte
{
    /**
     * @var integer
     */
    private $id_alerte;

    /**
     * @var string
     */
    private $message_alerte;

    /**
     * @var string
     */
    private $etat_alerte;

    /**
     * @var \FadcoBundle\Entity\Prestataire
     */
    private $Prestataire;


    /**
     * Get idAlerte
     *
     * @return integer
     */
    public function getIdAlerte()
    {
        return $this->id_alerte;
    }

    /**
     * Set messageAlerte
     *
     * @param string $messageAlerte
     *
     * @return Alerte
     */
    public function setMessageAlerte($messageAlerte)
    {
        $this->message_alerte = $messageAlerte;

        return $this;
    }

    /**
     * Get messageAlerte
     *
     * @return string
     */
    public function getMessageAlerte()
    {
        return $this->message_alerte;
    }

    /**
     * Set etatAlerte
     *
     * @param string $etatAlerte
     *
     * @return Alerte
     */
    public function setEtatAlerte($etatAlerte)
    {
        $this->etat_alerte = $etatAlerte;

        return $this;
    }

    /**
     * Get etatAlerte
     *
     * @return string
     */
    public function getEtatAlerte()
    {
        return $this->etat_alerte;
    }

    /**
     * Set prestataire
     *
     * @param \FadcoBundle\Entity\Prestataire $prestataire
     *
     * @return Alerte
     */
    public function setPrestataire(\FadcoBundle\Entity\Prestataire $prestataire = null)
    {
        $this->Prestataire = $prestataire;

        return $this;
    }

    /**
     * Get prestataire
     *
     * @return \FadcoBundle\Entity\Prestataire
     */
    public function getPrestataire()
    {
        return $this->Prestataire;
    }
    /**
     * @var \FadcoBundle\Entity\Prestataire
     */
    private $Destinataire;


    /**
     * Set destinataire
     *
     * @param \FadcoBundle\Entity\Prestataire $destinataire
     *
     * @return Alerte
     */
    public function setDestinataire(\FadcoBundle\Entity\Prestataire $destinataire = null)
    {
        $this->Destinataire = $destinataire;

        return $this;
    }

    /**
     * Get destinataire
     *
     * @return \FadcoBundle\Entity\Prestataire
     */
    public function getDestinataire()
    {
        return $this->Destinataire;
    }
    /**
     * @var string
     */
    private $lien_alerte;


    /**
     * Set lienAlerte
     *
     * @param string $lienAlerte
     *
     * @return Alerte
     */
    public function setLienAlerte($lienAlerte)
    {
        $this->lien_alerte = $lienAlerte;

        return $this;
    }

    /**
     * Get lienAlerte
     *
     * @return string
     */
    public function getLienAlerte()
    {
        return $this->lien_alerte;
    }
    /**
     * @var \DateTime
     */
    private $date_alerte;


    /**
     * Set dateAlerte
     *
     * @param \DateTime $dateAlerte
     *
     * @return Alerte
     */
    public function setDateAlerte($dateAlerte)
    {
        $this->date_alerte = $dateAlerte;

        return $this;
    }

    /**
     * Get dateAlerte
     *
     * @return \DateTime
     */
    public function getDateAlerte()
    {
        return $this->date_alerte;
    }
    public function DateTimestamp()
    {
        return $this->date_alerte->getTimestamp();
    }
}
