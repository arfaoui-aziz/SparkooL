<?php

namespace TeacherBundle\Repository;

use Doctrine\ORM\NonUniqueResultException;
use Doctrine\ORM\NoResultException;

/**
 * AbsentTeacherRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AbsentTeacherRepository extends \Doctrine\ORM\EntityRepository
{
    public function countAbsence($id)
    {
        try {
            return $this->createQueryBuilder('l')
                ->select('COUNT(l)')
                ->where('l.teacher = :id')
                ->setParameter('id', $id)
                ->getQuery()
                ->getSingleScalarResult();
        } catch (NoResultException $e) {
        } catch (NonUniqueResultException $e) {
        }
    }

    public function findAb($id)
    {

    }

}
