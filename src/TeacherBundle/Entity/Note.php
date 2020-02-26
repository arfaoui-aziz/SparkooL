<?php

namespace TeacherBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Note
 *
 * @ORM\Table(name="note")
 * @ORM\Entity(repositoryClass="TeacherBundle\Repository\NoteRepository")
 */
class Note
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
     * @var float
     *
     * @ORM\Column(name="CC", type="float", nullable=true)
     */
    private $cC;

    /**
     * @var float
     *
     * @ORM\Column(name="Exam", type="float", nullable=true)
     */
    private $exam;

    /**
     * @var string
     * @ORM\ManyToOne(targetEntity="AdminBundle\Entity\Subject")
     * @ORM\JoinColumn(name="id_subject",referencedColumnName="id")
     *
     * @ORM\Column(name="subject", type="string" , length=255, nullable=true)
     */
    private $subject;

    /**
     * @var string
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="id_studentt",referencedColumnName="id")
     * @ORM\Column(name="student", type="string", length=255, nullable=true)
     */
    private $student;


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
     * Set cC
     *
     * @param float $cC
     *
     * @return Note
     */
    public function setCC($cC)
    {
        $this->cC = $cC;

        return $this;
    }

    /**
     * Get cC
     *
     * @return float
     */
    public function getCC()
    {
        return $this->cC;
    }

    /**
     * Set exam
     *
     * @param float $exam
     *
     * @return Note
     */
    public function setExam($exam)
    {
        $this->exam = $exam;

        return $this;
    }

    /**
     * Get exam
     *
     * @return float
     */
    public function getExam()
    {
        return $this->exam;
    }

    /**
     * Set subject
     *
     * @param integer $subject
     *
     * @return Note
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return int
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set student
     *
     * @param string $student
     *
     * @return Note
     */
    public function setStudent($student)
    {
        $this->student = $student;

        return $this;
    }

    /**
     * Get student
     *
     * @return string
     */
    public function getStudent()
    {
        return $this->student;
    }
}

