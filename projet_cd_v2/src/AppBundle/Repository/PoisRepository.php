<?php

namespace AppBundle\Repository;

/**
 * PoisRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PoisRepository extends \Doctrine\ORM\EntityRepository
{
    public function findPoisMap($user_id) {

    // requête basique équivalente à findAll() : return this->queryBuilder('p')->getQuery()->getResult();

        $qb = $this->createQueryBuilder('p')
        -> innerJoin('p.map', 'm')
        -> where('m.user = :user_id')->setParameter('user_id', $user_id)
        -> orWhere('m.user = 3');

        return $qb->getQuery()->getResult();
    }
}