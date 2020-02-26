<?php

namespace TeacherBundle\Repository;

use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\NoResultException;

/**
 * DelayTeacherRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class DelayTeacherRepository extends \Doctrine\ORM\EntityRepository
{
    public function countDelay($id)
    {
        try {
            return $this->createQueryBuilder('l')
                ->select('SUM(l.duree)')
                ->where('l.teacher = :id')
                ->setParameter('id', $id)
                ->getQuery()
                ->getSingleScalarResult();
        } catch (NoResultException $e) {
        } catch (NonUniqueResultException $e) {
        }
    }
}