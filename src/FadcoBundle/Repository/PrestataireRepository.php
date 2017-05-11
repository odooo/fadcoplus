<?php

namespace FadcoBundle\Repository;
use Doctrine\ORM\EntityRepository;

use FadcoBundle\Entity\Prestataire;

class PrestataireRepository extends EntityRepository
{
    public function findByUsernameOrEmail($username)
    {
        $query = $this->createQueryBuilder('Presataire')
            ->from('FadcoBundle:Prestataire', 'Prestataire')
            ->where('Prestataire.username = :username')
            ->orWhere('Prestataire.email = :username')
            ->setParameter('username', $username)
            ->getQuery();

        return $query->setMaxResults(1)->getOneOrNullResult();
    }

    public function findByActiveToken($token) 
    {
        $query = $this->createQueryBuilder('Presataire')
            ->from('FadcoBundle:Prestataire', 'Prestataire')
            ->where('Prestataire.sessionToken = :token')
            ->andWhere('Prestataire.sessionTokenExpireAt >= :expireAt')
            ->setParameter('token', $token)
            ->setParameter('expireAt', new \DateTime())
            ->getQuery();

        return $query->setMaxResults(1)->getOneOrNullResult();
    }

    
    public function findAllAdmin()
    {
        $qb=$this->_em->createQueryBuilder();
        $qb->select('p')
            ->from('FadcoBundle:Prestataire','p')
            ->where('p.type=:adm')
            ->setParameters(array('adm'=>'ADMIN'));
        return $qb;
    }

    public function findAllDistributeur()
    {
        $qb=$this->_em->createQueryBuilder();
        $qb->select('p')
            ->from('FadcoBundle:Prestataire','p')
            ->where('p.type=:dis')
            ->setParameters(array('dis'=>'Distributeur'));
        return $qb;
    }
    
    public function trouver($id)
    {
        $qb=$this->_em->createQueryBuilder();
        $qb->select('p')
            ->from('FadcoBundle:Prestataire','p')
            ->where('p.id=:id')
            ->setParameters(array('id'=>$id));
        return $qb;
    }
}