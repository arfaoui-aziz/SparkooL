<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToOne;

/**
 * Schedule
 *
 * @ORM\Table(name="schedule")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\ScheduleRepository")
 */
class Schedule
{
    /**
     * @var int
     *
     * @ORM\Column(name="schedule_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $scheduleId;

    /**
     * @var string
     *
     * @ORM\Column(name="seance1", type="string", length=255, nullable=true)
     */
    private $seance1;

    /**
     * @var string
     *
     * @ORM\Column(name="seance2", type="string", length=255, nullable=true)
     */
    private $seance2;

    /**
     * @var string
     *
     * @ORM\Column(name="seance3", type="string", length=255, nullable=true)
     */
    private $seance3;

    /**
     * @var string
     *
     * @ORM\Column(name="seance4", type="string", length=255, nullable=true)
     */
    private $seance4;

    /**
     * @var string
     *
     * @ORM\Column(name="Day", type="string", length=255)
     */
    private $day;

    /**
     * @var string
     *
     * @ORM\Column(name="week", type="string", length=255, nullable=true)
     */
    private $week;

    /**
     * @OneToOne(targetEntity="Classe")
     * @JoinColumn(name="class_id", referencedColumnName="class_id")
     */
    private $classe;

    /**
     * @return mixed
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * @param mixed $classe
     */
    public function setClasse($classe)
    {
        $this->classe = $classe;
    }

    /**
     * @return int
     */
    public function getScheduleId()
    {
        return $this->scheduleId;
    }




    /**
     * Set seance1
     *
     * @param string $seance1
     *
     * @return Schedule
     */
    public function setSeance1($seance1)
    {
        $this->seance1 = $seance1;

        return $this;
    }

    /**
     * Get seance1
     *
     * @return string
     */
    public function getSeance1()
    {
        return $this->seance1;
    }

    /**
     * Set seance2
     *
     * @param string $seance2
     *
     * @return Schedule
     */
    public function setSeance2($seance2)
    {
        $this->seance2 = $seance2;

        return $this;
    }

    /**
     * Get seance2
     *
     * @return string
     */
    public function getSeance2()
    {
        return $this->seance2;
    }

    /**
     * Set seance3
     *
     * @param string $seance3
     *
     * @return Schedule
     */
    public function setSeance3($seance3)
    {
        $this->seance3 = $seance3;

        return $this;
    }

    /**
     * Get seance3
     *
     * @return string
     */
    public function getSeance3()
    {
        return $this->seance3;
    }

    /**
     * Set seance4
     *
     * @param string $seance4
     *
     * @return Schedule
     */
    public function setSeance4($seance4)
    {
        $this->seance4 = $seance4;

        return $this;
    }

    /**
     * Get seance4
     *
     * @return string
     */
    public function getSeance4()
    {
        return $this->seance4;
    }

    /**
     * Set day
     *
     * @param string $day
     *
     * @return Schedule
     */
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day
     *
     * @return string
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set week
     *
     * @param string $week
     *
     * @return Schedule
     */
    public function setWeek($week)
    {
        $this->week = $week;

        return $this;
    }

    /**
     * Get week
     *
     * @return string
     */
    public function getWeek()
    {
        return $this->week;
    }
}

