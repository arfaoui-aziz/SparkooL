<?php

namespace SoniaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Particcipation
 *
 * @ORM\Table(name="participation")
 * @ORM\Entity(repositoryClass="SoniaBundle\Repository\ParticcipationRepository")
 */
class Particcipation
{
    /**
     * @var int
     *
     * @ORM\Column(name="idParticip", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idParticip;

    /**
     * @var
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id",referencedColumnName="id")
     * @ORM\Column(name="userId", type="array")
     */
    private $userId;

    /**
     * @var
     * @ORM\ManyToOne(targetEntity="Event")
     * @ORM\JoinColumn(name="event_id",referencedColumnName="id")
     * @ORM\Column(name="eventId", type="array")
     */
    private $eventId;


    /**
     * @return int
     */
    public function getIdParticip()
    {
        return $this->idParticip;
    }

    /**
     * @param int $idParticip
     */
    public function setIdParticip($idParticip)
    {
        $this->idParticip = $idParticip;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * @param mixed $eventId
     */
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
    }




}

