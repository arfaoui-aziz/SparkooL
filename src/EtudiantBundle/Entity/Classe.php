<?php

namespace EtudiantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classe
 *
 * @ORM\Table(name="classe")
 * @ORM\Entity(repositoryClass="EtudiantBundle\Repository\ClasseRepository")
 */
class Classe
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
     * @var int
     *
     * @ORM\Column(name="class_name", type="string", length=255, nullable=true)
     */
    private $class_name;


    /**
     * @return int
     */
    public function getClassName()
    {
        return $this->class_name;
    }

    /**
     * @param int $class_name
     */
    public function setClassName($class_name)
    {
        $this->class_name = $class_name;
    }

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
     * @var int
     *
     * @ORM\Column(name="class_nbr", type="integer", nullable=true)
     */
    private $class_nbr;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get clasname
     *
     * @return string
     */
    public function __toString()
    {
        return $this->class_name;
    }

}

