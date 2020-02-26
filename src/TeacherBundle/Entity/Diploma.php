<?php

namespace TeacherBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Diploma
 *
 * @ORM\Table(name="diploma")
 * @ORM\Entity(repositoryClass="TeacherBundle\Repository\DiplomaRepository")
 */
class Diploma
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
     * @ORM\Column(name="intitule", type="string", length=255)
     *  @Assert\NotBlank(message="Please Insert a titled")
     * @Assert\Length(
     *     min= "3",
     *     max= "15",
     *     minMessage = "First Name must be at least {{ limit }} characters long",
     *     maxMessage = "First Name  cannot be longer than {{ limit }} characters"
     * )
     * @Assert\Type(type="ctype_alpha",message="First Name Most contain only characters")
     */
    private $intitule;

    /**
     * @var string
     *
     * @ORM\Column(name="ecole", type="string", length=255)
     *  @Assert\NotBlank(message="Please Insert the school")
     * @Assert\Length(
     *     min= "3",
     *     max= "15",
     *     minMessage = "First Name must be at least {{ limit }} characters long",
     *     maxMessage = "First Name  cannot be longer than {{ limit }} characters"
     * )
     * @Assert\Type(type="ctype_alpha",message="First Name Most contain only characters")
     */
    private $ecole;

    /**
     * @var string
     *
     * @ORM\Column(name="specialite", type="string", length=255)
     */
    private $specialite;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau", type="string", length=255)
     *  @Assert\NotBlank(message="Please Insert a level")
     * @Assert\Length(
     *     min= "3",
     *     max= "15",
     *     minMessage = "First Name must be at least {{ limit }} characters long",
     *     maxMessage = "First Name  cannot be longer than {{ limit }} characters"
     * )
     * @Assert\Type(type="ctype_alpha",message="First Name Most contain only characters")
     */
    private $niveau;

    /**
     * @var string
     *
     * @ORM\Column(name="date_obtentation", type="string", length=255)
     */
    private $dateObtentation;

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
     * Set intitule
     *
     * @param string $intitule
     *
     * @return Diploma
     */
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    /**
     * Get intitule
     *
     * @return string
     */
    public function getIntitule()
    {
        return $this->intitule;
    }

    /**
     * Set ecole
     *
     * @param string $ecole
     *
     * @return Diploma
     */
    public function setEcole($ecole)
    {
        $this->ecole = $ecole;

        return $this;
    }

    /**
     * Get ecole
     *
     * @return string
     */
    public function getEcole()
    {
        return $this->ecole;
    }

    /**
     * Set specialite
     *
     * @param string $specialite
     *
     * @return Diploma
     */
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }

    /**
     * Get specialite
     *
     * @return string
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set niveau
     *
     * @param string $niveau
     *
     * @return Diploma
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return string
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * @return string
     */
    public function getDateObtentation()
    {
        return $this->dateObtentation;
    }

    /**
     * @param string $dateObtentation
     */
    public function setDateObtentation($dateObtentation)
    {
        $this->dateObtentation = $dateObtentation;
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

