<?php

namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 * @UniqueEntity("id",message="This ID is already Used , ID most be Unique")
 * @UniqueEntity("email",message="This Email Address is already used")
 * @UniqueEntity("phone",message="Phone Number Already Exist")
 */
class User extends BaseUser
{
    /**
     * @var string
     * @ORM\Column(name="id", type="string", length=255)
     * @ORM\Id
     *
     * @Assert\Length(
     *     min= "3",
     *     max= "9",
     *     minMessage = "ID must be at least {{ limit }} characters long",
     *     maxMessage = "ID cannot be longer than {{ limit }} characters"
     * )
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=255)
     * @Assert\NotBlank(message="Please Insert a First Name")
     * @Assert\Length(
     *     min= "3",
     *     max= "15",
     *     minMessage = "First Name must be at least {{ limit }} characters long",
     *     maxMessage = "First Name  cannot be longer than {{ limit }} characters"
     * )
     * @Assert\Type(type="alpha",message="First Name Most contain only characters")
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255)
     * @Assert\NotBlank(message="Please Insert a Last Name")
     * @Assert\Length(
     *     min= "3",
     *     max= "15",
     *     minMessage = "Last Name must be at least {{ limit }} characters long",
     *     maxMessage = "Last Name  cannot be longer than {{ limit }} characters"
     * )
     * @Assert\Type(type="alpha",message="Last Name Most contain only characters")
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=255)
     * @Assert\Choice({"Male", "Female"},message="Please Select a Gender")
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="userType", type="string", length=255, nullable=true)
     * @Assert\Choice({"Administrator" ,"Responsable Etudiant", "Responsable enseignant","Responsable parent","User","Etudiant","Teacher"},message="Please Select a valid User Type")
     */
    private $userType;

    /**
     * @var string
     *
     * @ORM\Column(name="joiningDate", type="string", length=255)
     * @Assert\NotEqualTo("21/02/2020",message="Please Insert a valid JoiningDate")
     *
     */
    private $joiningDate;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     * @Assert\NotBlank(message="Please Insert an Address")
     * @Assert\Length(
     *     min= "5",
     *     max= "30",
     *     minMessage = "Address must be at least {{ limit }} characters long",
     *     maxMessage = "Address  cannot be longer than {{ limit }} characters"
     * )
     */
    private $address;

    /**
     * @var string
     * @Assert\NotBlank(message="Please Insert a phone number")
     * @ORM\Column(name="phone", type="string", length=255, nullable=true, unique=true)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=255, nullable=true)
     */
    private $picture;

    /**
     * @var string
     *
     * @ORM\Column(name="bloodGroup", type="string", length=255, nullable=true)
     */
    private $bloodGroup;

    /**
     * @var float
     * @ORM\Column(name="salaire", type="float", nullable=true)
     * @Assert\Type(type="float",message="Salaire most contain only numbers")
     */
    private $salaire;

    /**
     * @var string
     * @ORM\Column(name="birthDay", type="string", length=255)
     * @Assert\NotBlank(message="Please Insert a valid BirthDay")
     * @Assert\NotEqualTo("21/02/2020",message="Please Insert a valid BirthDay")
     */
    private $birthDay;

    /**
     * @var string
     *
     * @ORM\Column(name="occupation", type="string", length=255, nullable=true)
     */
    private $occupation;

    /**
     * @var string
     *
     * @ORM\Column(name="placeobirth", type="string", length=255, nullable=true)
     */
    private $placeobirth;

    /**
     * @var string
     *
     * @ORM\Column(name="academicyear", type="string", length=255, nullable=true)
     */
    private $academicyear;

    /**
     * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\Classe")
     * @ORM\JoinColumn(name="classe_id",referencedColumnName="class_id", nullable=true)
     */
    private $classe;

    /**
     * @return string
     */
    public function getAcademicyear()
    {
        return $this->academicyear;
    }

    /**
     * @param string $academicyear
     */
    public function setAcademicyear($academicyear)
    {
        $this->academicyear = $academicyear;
    }

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
     * @return string
     */
    public function getPlaceobirth()
    {
        return $this->placeobirth;
    }

    /**
     * @param string $placeobirth
     */
    public function setPlaceobirth($placeobirth)
    {
        $this->placeobirth = $placeobirth;
    }


    /**
     *
     * @return string
     */
    public function __toString(){
        return $this->username;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }




    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return User
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set userType
     *
     * @param string $userType
     *
     * @return User
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;

        return $this;
    }

    /**
     * Get userType
     *
     * @return string
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Set joiningDate
     *
     * @param string $joiningDate
     *
     * @return User
     */
    public function setJoiningDate($joiningDate)
    {
        $this->joiningDate = $joiningDate;

        return $this;
    }

    /**
     * Get joiningDate
     *
     * @return string
     */
    public function getJoiningDate()
    {
        return $this->joiningDate;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return User
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set picture
     *
     * @param string $picture
     *
     * @return User
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set bloodGroup
     *
     * @param string $bloodGroup
     *
     * @return User
     */
    public function setBloodGroup($bloodGroup)
    {
        $this->bloodGroup = $bloodGroup;

        return $this;
    }

    /**
     * Get bloodGroup
     *
     * @return string
     */
    public function getBloodGroup()
    {
        return $this->bloodGroup;
    }

    /**
     * Set salaire
     *
     * @param float $salaire
     *
     * @return User
     */
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }

    /**
     * Get salaire
     *
     * @return float
     */
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set birthDay
     *
     * @param string $birthDay
     *
     * @return User
     */
    public function setBirthDay($birthDay)
    {
        $this->birthDay = $birthDay;

        return $this;
    }

    /**
     * Get birthDay
     *
     * @return string
     */
    public function getBirthDay()
    {
        return $this->birthDay;
    }

    /**
     * Set occupation
     *
     * @param string $occupation
     *
     * @return User
     */
    public function setOccupation($occupation)
    {
        $this->occupation = $occupation;

        return $this;
    }

    /**
     * Get occupation
     *
     * @return string
     */
    public function getOccupation()
    {
        return $this->occupation;
    }


}

