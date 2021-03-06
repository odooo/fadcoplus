<?php

namespace FadcoBundle\Entity;

use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Piece
 */
class Piece
{
    /**
     * @var integer
     */
    private $idPiece;

    /**
     * @var string
     */
    private $libelle;

    /**
     * @var string
     */
    private $coche;

    /**
     * @var string
     */
    private $infosPiece;

    /**
     * @var string
     */
    private $nomGenerique;


    /**
     * Get idPiece
     *
     * @return integer
     */
    public function getIdPiece()
    {
        return $this->idPiece;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Piece
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set coche
     *
     * @param string $coche
     *
     * @return Piece
     */
    public function setCoche($coche)
    {
        $this->coche = $coche;

        return $this;
    }

    /**
     * Get coche
     *
     * @return string
     */
    public function getCoche()
    {
        return $this->coche;
    }

    /**
     * Set infosPiece
     *
     * @param string $infosPiece
     *
     * @return Piece
     */
    public function setInfosPiece($infosPiece)
    {
        $this->infosPiece = $infosPiece;

        return $this;
    }

    /**
     * Get infosPiece
     *
     * @return string
     */
    public function getInfosPiece()
    {
        return $this->infosPiece;
    }

    /**
     * Set nomGenerique
     *
     * @param string $nomGenerique
     *
     * @return Piece
     */
    public function setNomGenerique($nomGenerique)
    {
        $this->nomGenerique = $nomGenerique;

        return $this;
    }

    /**
     * Get nomGenerique
     *
     * @return string
     */
    public function getNomGenerique()
    {
        return $this->nomGenerique;
    }  
    
    private $file;
    
    private $temp;
    
    
    
     public function setFile(UploadedFile $file = null)
    {
        $this->file = $file;
        // check if we have an old image path
        if (is_file($this->getAbsoluteFile())){
            // store the old name to delete after the update
            $this->temp = $this->getAbsoluteFile();
            $this->chemin = null;
        } else {
            $this->chemin = 'avatar';
        }

        return $this;
    }

   
    public function getFile()
    {
        return $this->file;
    }

    public function getWebFile()
    {
        return null === $this->chemin
            ? null
            : $this->getUploadDir().$this->chemin;
    }
    
     public function getAbsoluteFile()
    {
        return null === $this->chemin
            ? null
            : $this->getUploadRootDir().$this->chemin;
    }
     protected function getUploadRootDir()
    {
        return __DIR__.'/../../../web/'.$this->getUploadDir();
    }
    
    protected function getUploadDir()
    {
        return "bundles/FadcoBundle/Dossier/".$this->Dossier->getIDossier()."/";
    }
    
    
    
    public function preUpload()
    {
       if (null !== $this->getFile()) {
            $this->datEnregistrement= new \DateTime();
            $filename = sha1(uniqid(mt_rand(), true));
            $this->chemin = $filename.'.'. $this->getFile()->guessExtension();
        }
    }




   
    
    public function upload()
    {
         if (null === $this->getFile()) {
            return;
        }
        $this->getFile()->move($this->getUploadRootDir(), $this->chemin);
        if (isset($this->temp)) {
            unlink($this->temp);
            $this->temp = null;
        }
        $this->file = null;
    }


    public function preRemoveUpload()
    {
        $this->temp = $this->getAbsoluteFile();
    }
    public function removeUpload()
    {
        if (is_file($this->temp)) {
            unlink($this->temp);
        }
    }
    /**
     * @var string
     */
    private $chemin;


    /**
     * Set chemin
     *
     * @param string $chemin
     *
     * @return Piece
     */
    public function setChemin($chemin)
    {
        $this->chemin = $chemin;

        return $this;
    }

    /**
     * Get chemin
     *
     * @return string
     */
    public function getChemin()
    {
        return $this->chemin;
    }

    /**
     * @var \DateTime
     */
    private $date;


    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Piece
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
     * @var integer
     */
    private $id;

    /**
     * @var \FadcoBundle\Entity\Dossier
     */
    private $Dossier;


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
     * Set dossier
     *
     * @param \FadcoBundle\Entity\Dossier $dossier
     *
     * @return Piece
     */
    public function setDossier(\FadcoBundle\Entity\Dossier $dossier = null)
    {
        $this->Dossier = $dossier;

        return $this;
    }

    /**
     * Get dossier
     *
     * @return \FadcoBundle\Entity\Dossier
     */
    public function getDossier()
    {
        return $this->Dossier;
    }
}
