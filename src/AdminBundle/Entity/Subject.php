<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\ManyToMany;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * Subject
 *
 * @ORM\Table(name="subject")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\SubjectRepository")
 * @UniqueEntity("subjectName",message="subject Already Added")
 */

class Subject
{
    /**
     * @var int
     *
     * @ORM\Column(name="subject_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $subjectId;

    /**
     * @var string
     *
     * @ORM\Column(name="subject_name", type="string", length=255, unique=true)
     * @Assert\NotBlank(message="Insert a Subject Name")
     * * @Assert\Length(
     *     min= "3",
     *     max= "15",
     *     minMessage = "Subject Name must be at least {{ limit }} characters long",
     *     maxMessage = "Subject Name  cannot be longer than {{ limit }} characters"
     * )
     */
    private $subjectName;

    /**
     * @var int
     * @Assert\Range(
     *      min = 1,
     *      max = 10,
     *      minMessage = "Subject Cofficient cannott be  0",
     *      maxMessage = "Subject Cofficient Max is {{ limit }}"
     * )
     * @ORM\Column(name="coefficient", type="integer")
     * @Assert\NotBlank(message="Insert a Valid Coefficient")
     */
    private $coefficient;



    /**
     * Many Users have Many Groups.
     * @ManyToMany(targetEntity="Classe",inversedBy="subjects")
     * @JoinTable(name="subject_byClasse",
     *      joinColumns={@JoinColumn(name="subject_id", referencedColumnName="subject_id")},
     *      inverseJoinColumns={@JoinColumn(name="class_id", referencedColumnName="class_id")}
     *      )
     */

    private $classes;

    /**
     * @return mixed
     */
    public function getClasses()
    {
        return $this->classes;
    }

    /**
     *
     * @return string
     */
    public function __toString(){
        return $this->subjectName;
    }

    /**
     * @param mixed $classes
     */
    public function setClasses($classes)
    {
        $this->classes = $classes;
    }

    public function __construct()
    {
        $this->classes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @return int
     */
    public function getSubjectId()
    {
        return $this->subjectId;
    }



    /**
     * Set subjectName
     *
     * @param string $subjectName
     *
     * @return Subject
     */
    public function setSubjectName($subjectName)
    {
        $this->subjectName = $subjectName;

        return $this;
    }

    /**
     * Get subjectName
     *
     * @return string
     */
    public function getSubjectName()
    {
        return $this->subjectName;
    }

    /**
     * Set coefficient
     *
     * @param integer $coefficient
     *
     * @return Subject
     */
    public function setCoefficient($coefficient)
    {
        $this->coefficient = $coefficient;

        return $this;
    }

    /**
     * Get coefficient
     *
     * @return int
     */
    public function getCoefficient()
    {
        return $this->coefficient;
    }
}

