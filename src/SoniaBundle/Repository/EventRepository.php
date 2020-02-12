<?php

namespace SoniaBundle\Repository;
use Doctrine\ORM\EntityRepository;
/**
 * EventRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EventRepository extends \Doctrine\ORM\EntityRepository
{
    public function findDistinct($id)
    {
        $Query=$this->getEntityManager()->createQuery("select A from AppBundle:User A where A.id != :id ")
            ->setParameter('id','%'.$id.'%');
        return $Query->getResult();
    }

    public function findT($event,$idU)
    {
        $query= $this->getEntityManager()
            ->createQuery(
            "SELECT * FROM user_byevent A where A.event_id ==  :event and A.user_id == :idU")
            ->setParameter('event',$event)->setParameter('idU',$idU)
            ;
        return $query->getResult();

    }

}
