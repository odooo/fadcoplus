<?php

namespace FadcoBundle\Repository;

/**
 * DossierRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class DossierRepository extends \Doctrine\ORM\EntityRepository
{
    private $keyOfCrypt;


    public function Crypter($donnee)
    {
        if (!$this->getKeyOfCrypt()) {
            $this->setKeyOfCrypt("1994fiacreAyedDossouParakouEtudCotonouWork2015GlobalServiceTerrain");
        }

        return $this->f_crypt($this->keyOfCrypt, $donnee);
    }

    public function Decrypter($donnee)
    {

        return $this->f_decrypt($this->keyOfCrypt, $donnee);
    }

    public function setKeyOfCrypt($keyOfCrypt)
    {
        $this->keyOfCrypt = $keyOfCrypt;
        return $this;
    }


    public function getKeyOfCrypt()
    {
        return $this->keyOfCrypt;
    }

    private function f_crypt($private_key, $str_to_crypt)
    {
        $private_key = md5($private_key);
        $letter = -1;
        $new_str = '';
        $strlen = strlen($str_to_crypt);

        for ($i = 0; $i < $strlen; $i++) {
            $letter++;
            if ($letter > 31) {
                $letter = 0;
            }
            $neword = ord($str_to_crypt{$i}) + ord($private_key{$letter});
            if ($neword > 255) {
                $neword -= 256;
            }
            $new_str .= chr($neword);
        }
        return base64_encode($new_str);
    }

    private function f_decrypt($private_key, $str_to_decrypt)
    {
        $private_key = md5($private_key);
        $letter = -1;
        $new_str = '';
        $str_to_decrypt = base64_decode($str_to_decrypt);
        $strlen = strlen($str_to_decrypt);
        for ($i = 0; $i < $strlen; $i++) {
            $letter++;
            if ($letter > 31) {
                $letter = 0;
            }
            $neword = ord($str_to_decrypt{$i}) - ord($private_key{$letter});
            if ($neword < 1) {
                $neword += 256;
            }
            $new_str .= chr($neword);
        }
        return $new_str;
    }

    public function findWithOffset($var, $init = 0, $offset = 100)
    {
        $init = (int)$init;
        $offset = (int)$offset;
        return $this->getEntityManager()->getRepository("FadcoBundle:Dossier")
            ->createQueryBuilder("p")
            ->where("p.id like :var")
            ->orWhere("p.nomDossier like :var")
            ->orWhere("p.datEnregistrement like :var")
            ->orWhere("p.localisationPhysique like :var")
            ->orWhere("p.observations like :var")
            ->orWhere("p.chemin like :var")
            ->setParameter("var", $var . "%")
            ->orderBy("p.nomDossier", "ASC")
            ->setFirstResult($init)
            ->setMaxResults($offset)
            ->getQuery()
            ->getResult();
    }

    public function findDosssierWithPiece($var, $init = 0, $offset = 100)
    {
        $init = (int)$init;
        $offset = (int)$offset;
        return $this->getEntityManager()->getRepository("FadcoBundle:Piece")
            ->createQueryBuilder("p")
            ->leftJoin('p.Dossier', 'd')
            ->where("p.id like :var")
            ->orWhere("p.libelle like :var")
            ->orWhere("p.coche like :var")
            ->orWhere("p.infosPiece like :var")
            ->orWhere("p.nomGenerique like :var")
            ->orWhere("d.nomDossier like :var")
            ->setParameter("var", $var . "%")
            ->orderBy("d.nomDossier", "ASC")
            ->setFirstResult($init)
            ->setMaxResults($offset)
            ->getQuery()
            ->getResult();
    }

    public function search($param, $init = 0, $offset = 100)
    {
        switch ($param->get("active")) {
            case 1:
                return $this->getEntityManager()->getRepository("FadcoBundle:Dossier")
                    ->createQueryBuilder('d')
                    ->where("d.id like :num")
                    ->andWhere("d.nomDossier like :nom")
                    ->setFirstResult($init)
                    ->setMaxResults($offset)
                    ->setParameter("num", $param->get("numDos") . "%")
                    ->setParameter("nom", $param->get("nomDos") . "%")
                    ->getQuery()
                    ->getResult();
            case 2:
                return $this->getEntityManager()->getRepository("FadcoBundle:Dossier")->createQueryBuilder('d')
                    ->where("d.objet like :object")
                    ->setFirstResult($init)
                    ->setMaxResults($offset)
                    ->setParameter("object", "%" . $param->get("object") . "%")
                    ->getQuery()
                    ->getResult();
            case 3:
                return $this->findDosssierWithPiece($param->get("contenu"), $init, $offset);
            case 4:
                return $this->getEntityManager()->getRepository("FadcoBundle:Piece")
                    ->createQueryBuilder("p")
                    ->leftJoin('p.Dossier', 'd')
                    ->where("p.id like :num")
                    ->orWhere("p.libelle like :nom")
                    ->orWhere("p.coche like :var")
                    ->orWhere("p.infosPiece like :var")
                    ->orWhere("p.nomGenerique like :var")
                    ->orWhere("d.nomDossier like :nom")
                    ->andWhere("d.id like :num")
                    ->andWhere("d.objet like :object")
                    ->setFirstResult($init)
                    ->setMaxResults($offset)
                    ->setParameter("var", "%" . $param->get("contenu") . "%")
                    ->setParameter("num", $param->get("numDos") . "%")
                    ->setParameter("nom", $param->get("nomDos") . "%")
                    ->setParameter("object", "%" . $param->get("object") . "%")
                    ->getQuery()
                    ->getResult();
            default :
                return Null;

        }
    }

    public function count($param)
    {
        switch ($param->get("active")) {
            case 1:
                return $this->getEntityManager()->getRepository("FadcoBundle:Dossier")
                    ->createQueryBuilder('d')
                    ->select("COUNT(d)")
                    ->where("d.id like :num")
                    ->andWhere("d.nomDossier like :nom")
                    ->setParameter("num", $param->get("numDos") . "%")
                    ->setParameter("nom", $param->get("nomDos") . "%")
                    ->getQuery()
                    ->getSingleScalarResult();
            case 2:
                return $this->getEntityManager()->getRepository("FadcoBundle:Dossier")
                    ->createQueryBuilder('d')
                    ->select("COUNT(d)")
                    ->where("d.objet like :object")
                    ->setParameter("object", "%" . $param->get("object") . "%")
                    ->getQuery()
                    ->getSingleScalarResult();
            case 3:
                return $this->getEntityManager()->getRepository("FadcoBundle:Piece")
                    ->createQueryBuilder("p")
                    ->select("COUNT(p)")
                    ->leftJoin('p.Dossier', 'd')
                    ->where("p.id like :var")
                    ->orWhere("p.libelle like :var")
                    ->orWhere("p.coche like :var")
                    ->orWhere("p.infosPiece like :var")
                    ->orWhere("p.nomGenerique like :var")
                    ->orWhere("d.nomDossier like :var")
                    ->setParameter("var", $param->get("contenu") . "%")
                    ->getQuery()
                    ->getSingleScalarResult();
            case 4:
                return $this->getEntityManager()->getRepository("FadcoBundle:Piece")
                    ->createQueryBuilder("p")
                    ->select("COUNT(p)")
                    ->leftJoin('p.Dossier', 'd')
                    ->where("p.id like :num")
                    ->orWhere("p.libelle like :nom")
                    ->orWhere("p.coche like :var")
                    ->orWhere("p.infosPiece like :var")
                    ->orWhere("p.nomGenerique like :var")
                    ->orWhere("d.nomDossier like :nom")
                    ->andWhere("d.id like :num")
                    ->andWhere("d.objet like :object")
                    ->setParameter("var", "%" . $param->get("contenu") . "%")
                    ->setParameter("num", $param->get("numDos") . "%")
                    ->setParameter("nom", $param->get("nomDos") . "%")
                    ->setParameter("object", "%" . $param->get("object") . "%")
                    ->getQuery()
                    ->getSingleScalarResult();
            default :
                return Null;

        }
    }

    public function getNouveauxDossiers($from_fr , $to_fr)
    {
        $from_us = date('Y-m-d', strtotime(str_replace('/', '-', $from_fr)));
        $to_us = date('Y-m-d', strtotime(str_replace('/', '-', $to_fr)));
            $qb = $this->getEntityManager()->getRepository("FadcoBundle:Dossier")
                ->createQueryBuilder('d')
                ->where('d.datEnregistrement BETWEEN :from AND :to')
                ->setParameter('from',$from_us)
                ->setParameter('to',$to_us)
                ->getQuery();
            return $qb->getResult();

    }
}

