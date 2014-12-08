<?php

namespace STC\SiteBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * SponsorRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SponsorRepository extends EntityRepository
{
    /**
     * @return array
     */
    public function findSponsor()
    {
        $query = $this->createQueryBuilder('a')
            ->andWhere('a.enabled =:enabled')
            ->setParameter('enabled', true);
        return $query->getQuery()->getResult();
    }
}
