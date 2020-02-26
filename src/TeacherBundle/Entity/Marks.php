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
     * @param integer $cC
     *
     * @return Marks
     */
    public function setCC($cC)
    {
        $this->cC = $cC;

        return $this;
    }

    /**
     * Get cC
     *
     * @return int
     */
    public function getCC()
    {
        return $this->cC;
    }

    /**
     * Set exam
     *
     * @param integer $exam
     *
     * @return Marks
     */
    public function setExam($exam)
    {
        $this->exam = $exam;

        return $this;
    }

    /**
     * Get exam
     *
     * @return int
     */
    public function getExam()
    {
        return $this->exam;
    }
}

