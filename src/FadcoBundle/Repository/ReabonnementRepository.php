<?php

namespace FadcoBundle\Repository;

/**
 * ReabonnementRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ReabonnementRepository extends \Doctrine\ORM\EntityRepository
{

	public function getNombre($dateFrom, $dateTo)
    {
    	$qb = $this->createQueryBuilder('r');        

        return $qb->where('r.date BETWEEN :d AND :f')
        ->setParameters(array("d"=>$dateFrom, "f"=>$dateTo))
		->getQuery()->getResult(); 
        
    }

}
