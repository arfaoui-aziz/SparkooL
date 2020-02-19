<?php

namespace SoniaBundle\Entity;
use AppBundle\Entity\User;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\ManyToMany;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * Club
 *
 * @ORM\Table(name="club")
 * @ORM\Entity(repositoryClass="SoniaBundle\Repository\ClubRepository")
 * @UniqueEntity("nomClub",message="This name is already taken  by other Club ")
 * @UniqueEntity("dateCreation",message="This date is already used")
 */
class Club
{
    /**
     * @var int
     *
     * @ORM\Column(name="idClub", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idClub;

    /**
     * @var string
     *
     * @ORM\Column(name="nomClub", type="string", length=255)
     * @Assert\NotBlank(message="Please insert an Name")
     * @Assert\Length(
     *     min= "3",
     *     max= "15",
     *     minMessage = "Name is too short",
     *     maxMessage = "Name is too long"
     * )
     */
    private $nomClub;

    /**
     * @var int
     * @Assert\NotBlank(message="Please choose a number ")
     * @ORM\Column(name="members", type="integer")
     */
    private $members;

    /**
     * @var string
     * @Assert\NotBlank(message="Please choose an Activity ")
     * @ORM\Column(name="activity", type="string", length=255)
     */
    private $activity;

    /**
     * @var float
     * @ORM\Column(name="budget", type="float")
     * @Assert\GreaterThan(
     *     value =0,
     * )
     *@Assert\Type(type="float",message="Budget must contain only numbers")
     *@Assert\NotBlank(message="Please choose a budget ")
     *
     */
    private $budget;

    /**
     * @var string
     * @Assert\NotBlank(message="Please choose a Date")
     * @ORM\Column(name="dateCreation", type="string", length=255)
     */
    private $dateCreation;


    /**
     * Many Users have Many Groups.
     * @ManyToMany(targetEntity="AppBundle\Entity\User")
     * @JoinTable(name="User_byClub",
     *      joinColumns={@JoinColumn(name="club_id", referencedColumnName="idClub")},
     *      inverseJoinColumns={@JoinColumn(name="user_id", referencedColumnName="id")}
     *      )
     */
    private $clubs;

    /**
     * Default constructor, initializes collections
     */
    public function __construct()
    {
        $this->clubs = new ArrayCollection();
    }

    public function addClubUser(User $user) {

//Avoid duplication
        if ($this->clubs->contains($user))
        { return ;}

        $this->clubs[] = $user;
    }
/*
    public function removeTournament(Tournament $tournament)
    {
        if ($this->tournaments->contains($tournament)) {
            $this->tournaments->removeElement($tournament);
            $tournament->removeTeam($this);
        }
    }

*/
    /**
     * Set nomClub
     *
     * @param string $nomClub
     *
     * @return Club
     */
    public function setNomClub($nomClub)
    {
        $this->nomClub = $nomClub;
    
        return $this;
    }

    /**
     * Get nomClub
     *
     * @return string
     */
    public function getNomClub()
    {
        return $this->nomClub;
    }

    /**
     * Set members
     *
     * @param integer $members
     *
     * @return Club
     */
    public function setMembers($members)
    {
        $this->members = $members;
    
        return $this;
    }

    /**
     * Get members
     *
     * @return integer
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * Set activity
     *
     * @param string $activity
     *
     * @return Club
     */
    public function setActivity($activity)
    {
        $this->activity = $activity;
    
        return $this;
    }

    /**
     * Get activity
     *
     * @return string
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * Set budget
     *
     * @param float $budget
     *
     * @return Club
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;
    
        return $this;
    }

    /**
     * Get budget
     *
     * @return float
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * @return int
     */
    public function getIdClub()
    {
        return $this->idClub;
    }

    /**
     * @param int $idClub
     */
    public function setIdClub($idClub)
    {
        $this->idClub = $idClub;
    }

    /**
     * Set dateCreation
     *
     * @param string $dateCreation
     *
     * @return Club
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    
        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return string
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }
}

