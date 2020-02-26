<?php

namespace EtudiantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Votes
 *
 * @ORM\Table(name="votes")
 * @ORM\Entity(repositoryClass="EtudiantBundle\Repository\VotesRepository")
 */
class Votes
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
     * @var bool
     *
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;


    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="voter",referencedColumnName="id", onDelete="CASCADE")
     */
    private $voter;


    /**
     * @ORM\ManyToOne(targetEntity="EtudiantBundle\Entity\Forum")
     * @ORM\JoinColumn(name="subjectvoted",referencedColumnName="id", onDelete="CASCADE")
     */
    private $subjectvoted;

    /**
     * @return mixed
     */
    public function getVoter()
    {
        return $this->voter;
    }

    /**
     * @param mixed $voter
     */
    public function setVoter($voter)
    {
        $this->voter = $voter;
    }

    /**
     * @return mixed
     */
    public function getSubjectvoted()
    {
        return $this->subjectvoted;
    }

    /**
     * @param mixed $subjectvoted
     */
    public function setSubjectvoted($subjectvoted)
    {
        $this->subjectvoted = $subjectvoted;
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
     * Set status
     *
     * @param boolean $status
     *
     * @return Votes
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return boolean
     */
    public function getStatus()
    {
        return $this->status;
    }
}

