<?php

namespace TeacherBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Marks
 *
 * @ORM\Table(name="marks")
 * @ORM\Entity(repositoryClass="TeacherBundle\Repository\MarksRepository")
 */
class Marks
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
     * @ORM\Column(name="CC", type="integer")
     */
    private $cC;

    


    /**
     * @var int
     *
     * @ORM\Column(name="exam", type="integer")
     */
    private $exam;



    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getCC()
    {
        return $this->cC;
    }

    /**
     * @param int $cC
     */
    public function setCC($cC)
    {
        $this->cC = $cC;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return int
     */
    public function getExam()
    {
        return $this->exam;
    }

    /**
     * @param int $exam
     */
    public function setExam($exam)
    {
        $this->exam = $exam;
    }


   }

