<?php

namespace SoniaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\OneToOne;


/**
 * Rating
 *
 * @ORM\Table(name="rating")
 * @ORM\Entity(repositoryClass="SoniaBundle\Repository\RatingRepository")
 */
class Rating
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
     * @ORM\Column(name="idUser", type="integer")
     * @ORM\OneToOne(targetEntity="User")
     * @JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $idUser;

    /**
     * @var int
     *
     * @ORM\Column(name="idClub", type="integer")
     * @ORM\OneToOne(targetEntity="Club")
     * @JoinColumn(name="club_id", referencedColumnName="idClub")
     */
    private $idClub;

    /**
     * @var int
     *
     * @ORM\Column(name="nbEtoile", type="integer")
     */
    private $nbEtoile;


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
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return Rating
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    
        return $this;
    }

    /**
     * Get idUser
     *
     * @return integer
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * Set idClub
     *
     * @param integer $idClub
     *
     * @return Rating
     */
    public function setIdClub($idClub)
    {
        $this->idClub = $idClub;
    
        return $this;
    }

    /**
     * Get idClub
     *
     * @return integer
     */
    public function getIdClub()
    {
        return $this->idClub;
    }

    /**
     * Set nbEtoile
     *
     * @param integer $nbEtoile
     *
     * @return Rating
     */
    public function setNbEtoile($nbEtoile)
    {
        $this->nbEtoile = $nbEtoile;
    
        return $this;
    }

    /**
     * Get nbEtoile
     *
     * @return integer
     */
    public function getNbEtoile()
    {
        return $this->nbEtoile;
    }
}

