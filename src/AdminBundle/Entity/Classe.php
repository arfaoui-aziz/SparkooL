<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManyToMany;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Classe
 *
 * @ORM\Table(name="classe")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\ClasseRepository")
 * @UniqueEntity("className",message="This Class is already Added")
 */
class Classe
{
    /**
     * @var int
     *
     * @ORM\Column(name="class_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $classId;

    /**
     * @var string
     *
     * @ORM\Column(name="class_name", type="string", length=255, unique=true)
     */
    private $className;

    /**
     * @var int
     *
     * @ORM\Column(name="class_nbr", type="integer", nullable=true)
     */
    private $class_nbr;

    /**
     * @return int
     */
    public function getClassNbr()
    {
        return $this->class_nbr;
    }

    /**
     * @param int $class_nbr
     */
    public function setClassNbr($class_nbr)
    {
        $this->class_nbr = $class_nbr;
    }


    /**
     *
     * @return string
     */
    public function __toString(){
        return $this->className;
    }

    /**
     * @return int
     */
    public function getClassId()
    {
        return $this->classId;
    }

    /**
     * Many Groups have Many Users.
     * @ManyToMany(targetEntity="Subject", mappedBy="classes")
     */
    private $subjects;
    public function __construct() {
        $this->subjects = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getSubjects()
    {
        return $this->subjects;
    }

    /**
     * @param mixed $subjects
     */
    public function setSubjects($subjects)
    {
        $this->subjects = $subjects;
    }


    /**
     * Set className
     *
     * @param string $className
     *
     * @return Classe
     */
    public function setClassName($className)
    {
        $this->className = $className;

        return $this;
    }

    /**
     * Get className
     *
     * @return string
     */
    public function getClassName()
    {
        return $this->className;
    }
}

