<?php

namespace EtudiantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation")
 * @ORM\Entity(repositoryClass="EtudiantBundle\Repository\ReclamationRepository")
 */
class Reclamation
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
     * @ORM\Column(name="reclamation", type="text")
     */
    private $reclamation;

    /**
     * @var bool
     *
     * @ORM\Column(name="anonymously", type="boolean")
     */
    private $anonymously;


    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="etudiant_id",referencedColumnName="id")
     */
    private $etudiant;

    /**
     * @return mixed
     */
    public function getEtudiant()
    {
        return $this->etudiant;
    }

    /**
     * @param mixed $etudiant
     */
    public function setEtudiant($etudiant)
    {
        $this->etudiant = $etudiant;
    }



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
     * Set reclamation
     *
     * @param string $reclamation
     *
     * @return Reclamation
     */
    public function setReclamation($reclamation)
    {
        $this->reclamation = $reclamation;
    
        return $this;
    }

    /**
     * Get reclamation
     *
     * @return string
     */
    public function getReclamation()
    {
        return $this->reclamation;
    }

    /**
     * Set anonymously
     *
     * @param boolean $anonymously
     *
     * @return Reclamation
     */
    public function setAnonymously($anonymously)
    {
        $this->anonymously = $anonymously;
    
        return $this;
    }

    /**
     * Get anonymously
     *
     * @return boolean
     */
    public function getAnonymously()
    {
        return $this->anonymously;
    }
}

