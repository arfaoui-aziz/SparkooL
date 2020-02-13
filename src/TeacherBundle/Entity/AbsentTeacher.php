<?php

namespace TeacherBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AbsentTeacher
 *
 * @ORM\Table(name="absent_teacher")
 * @ORM\Entity(repositoryClass="TeacherBundle\Repository\AbsentTeacherRepository")
 */
class AbsentTeacher
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_deb", type="string", length=255)
     */
    private $heureDeb;

    /**
     * @var string
     *
     * @ORM\Column(name="heure_fin", type="string", length=255)
     */
    private $heureFin;

    /**
     * @var string
     *
     * @ORM\Column(name="jour", type="string", length=255)
     */
    private $jour;
    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="id_Teacher",referencedColumnName="id")
     */
    private $teacher;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getHeureDeb()
    {
        return $this->heureDeb;
    }

    /**
     * @param string $heureDeb
     */
    public function setHeureDeb($heureDeb)
    {
        $this->heureDeb = $heureDeb;
    }

    /**
     * @return string
     */
    public function getHeureFin()
    {
        return $this->heureFin;
    }

    /**
     * @param string $heureFin
     */
    public function setHeureFin($heureFin)
    {
        $this->heureFin = $heureFin;
    }




    /**
     * @return string
     */
    public function getJour()
    {
        return $this->jour;
    }

    /**
     * @param string $jour
     */
    public function setJour($jour)
    {
        $this->jour = $jour;
    }


    /**
     * @return mixed
     */
    public function getTeacher()
    {
        return $this->teacher;
    }

    /**
     * @param mixed $teacher
     */
    public function setTeacher($teacher)
    {
        $this->teacher = $teacher;
    }


}

