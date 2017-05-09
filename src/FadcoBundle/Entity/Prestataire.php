<?php

namespace FadcoBundle\Entity;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Prestataire
 */
class Prestataire extends BaseUser
{
    
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var \DateTime
     */
    private $dateEntree;


    /**
     * @var string
     */
    private $ville;

    /**
     * @var string
     */
    private $photo;

    /**
     * @var string
     */
    private $type;

    /**
     * @var \FadcoBundle\Entity\Agence
     */
    private $agence;

    /**
     * @var string
     */
    private $contact;

    /**
     * @var integer
     */
    private $applauseCount = 0;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $rigths;
    
    public function __construct()
    {
        parent::__construct();

    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Prestataire
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    public function getName()
    {
        $tmp = $this->nom.' '.$this->prenom;
        return $tmp;
    }


    private $file;
    private $updatedAt;
    private $temp;
    
    
     public function getWebPhoto()
    {
        return null === $this->photo
            ? null
            : $this->getUploadDir().$this->photo;
    }
    
     public function getAbsolutePhoto()
    {
        return null === $this->photo
            ? null
            : $this->getUploadRootDir().$this->photo;
    }
     protected function getUploadRootDir()
    {
        return __DIR__.'/../../../web/'.$this->getUploadDir();
    }
    
    protected function getUploadDir()
    {
        return "bundles/FadcoBundle/Prestataire/".$this->getId()."/photo/";
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function preUpload()
    {
       if (null !== $this->getFile()) {
            $this->updatedAt= new \DateTime();
            $filename = sha1(uniqid(mt_rand(), true));
            $this->photo = $filename.'.'. $this->getFile()->guessExtension();
        }
    }


    /**
     * @ORM\PostPersist
     * @ORM\PostUpdate
     */
    public function upload()
    {
         if (null === $this->getFile()) {
            return;
        }
        $this->getFile()->move($this->getUploadRootDir(), $this->photo);
        if (isset($this->temp)) {
            unlink($this->temp);
            $this->temp = null;
        }
        $this->file = null;
    }


    public function preRemoveUpload()
    {
        $this->temp = $this->getAbsolutePhoto();
    }
    public function removeUpload()
    {
        if (is_file($this->temp)) {
            unlink($this->temp);
        }
    }
    
    public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
        // check if we have an old image path
        if (is_file($this->getAbsolutePhoto())){
            // store the old name to delete after the update
            $this->temp = $this->getAbsolutePhoto();
            $this->photo = null;
        } else {
            $this->photo = 'bundles/FadcoBundle/images/profil.png';
        }

        return $this;
    }

    public function getFile()
    {
        return $this->file;
    }

    public function __toString()
    {
        return $this->nom.' '.$this->prenom;
    }

    /**
     * @var string
     */
    private $sessionToken;

    /**
     * @var \DateTime
     */
    private $sessionTokenExpireAt;


    /**
     * Set sessionToken
     *
     * @param string $sessionToken
     *
     * @return Prestataire
     */
    public function setSessionToken($sessionToken)
    {
        $this->sessionToken = $sessionToken;

        return $this;
    }

    /**
     * Get sessionToken
     *
     * @return string
     */
    public function getSessionToken()
    {
        return $this->sessionToken;
    }

    /**
     * Set sessionTokenExpireAt
     *
     * @param \DateTime $sessionTokenExpireAt
     *
     * @return Prestataire
     */
    public function setSessionTokenExpireAt($sessionTokenExpireAt)
    {
        $this->sessionTokenExpireAt = $sessionTokenExpireAt;
        return $this;
    }

    /**
     * Get sessionTokenExpireAt
     *
     * @return \DateTime
     */
    public function getSessionTokenExpireAt()
    {
        return $this->sessionTokenExpireAt;
    }

    /**
     * @var \DateTime
     */
    private $date;


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Prestataire
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
     * @return Prestataire
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

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Prestataire
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
     * Set type
     *
     * @param string $type
     *
     * @return Prestataire
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
     * Set ville
     *
     * @param string $ville
     *
     * @return Prestataire
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set contact
     *
     * @param string $contact
     *
     * @return Prestataire
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
     * Set applauseCount
     *
     * @param integer $applauseCount
     *
     * @return Prestataire
     */
    public function setApplauseCount($applauseCount)
    {
        $this->applauseCount = $applauseCount;

        return $this;
    }

    /**
     * Get applauseCount
     *
     * @return integer
     */
    public function getApplauseCount()
    {
        return $this->applauseCount;
    }

    /**
     * Set agence
     *
     * @param \FadcoBundle\Entity\Agence $agence
     *
     * @return Prestataire
     */
    public function setAgence(\FadcoBundle\Entity\Agence $agence = null)
    {
        $this->agence = $agence;

        return $this;
    }

    /**
     * Get agence
     *
     * @return \FadcoBundle\Entity\Agence
     */
    public function getAgence()
    {
        return $this->agence;
    }

    /**
     * Add rigth
     *
     * @param \FadcoBundle\Entity\Rigth $rigth
     *
     * @return Prestataire
     */
    public function addRigth(\FadcoBundle\Entity\Rigth $rigth)
    {
        $this->rigths[] = $rigth;

        return $this;
    }

    /**
     * Remove rigth
     *
     * @param \FadcoBundle\Entity\Rigth $rigth
     */
    public function removeRigth(\FadcoBundle\Entity\Rigth $rigth)
    {
        $this->rigths->removeElement($rigth);
    }

    /**
     * Get rigths
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRigths()
    {
        return $this->rigths;
    }
}
