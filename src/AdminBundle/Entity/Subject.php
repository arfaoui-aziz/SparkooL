<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Subject
 *
 * @ORM\Table(name="subject")
 * @ORM\Entity(repositoryClass="AdminBundle\Repository\SubjectRepository")
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
     */
    private $subjectName;

    /**
     * @var int
     *
     * @ORM\Column(name="coefficient", type="integer")
     */
    private $coefficient;

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

