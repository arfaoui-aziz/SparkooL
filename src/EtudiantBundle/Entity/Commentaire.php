<?php

namespace EtudiantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire")
 * @ORM\Entity(repositoryClass="EtudiantBundle\Repository\CommentaireRepository")
 */
class Commentaire
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
     * @ORM\Column(name="commentaire", type="text")
     */
    private $commentaire;


    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="comentor_id",referencedColumnName="id", onDelete="CASCADE")
     */
    private $comentor;

    /**
     * @return mixed
     */
    public function getComentor()
    {
        return $this->comentor;
    }

    /**
     * @param mixed $comentor
     */
    public function setComentor($comentor)
    {
        $this->comentor = $comentor;
    }



    /**
     * @var string
     *
     * @ORM\Column(name="commentdate", type="string", length=255)
     */
    private $commentdate;





    /**
     * @ORM\ManyToOne(targetEntity="EtudiantBundle\Entity\Forum")
     * @ORM\JoinColumn(name="subject",referencedColumnName="id", onDelete="CASCADE")
     */
    private $subject;

    /**
     * @return string
     */
    public function getCommentor()
    {
        return $this->commentor;
    }

    /**
     * @param string $commentor
     */
    public function setCommentor($commentor)
    {
        $this->commentor = $commentor;
    }

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param mixed $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
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
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Commentaire
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    
        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * @return string
     */
    public function getCommentdate()
    {
        return $this->commentdate;
    }

    /**
     * @param string $commentdate
     */
    public function setCommentdate($commentdate)
    {
        $this->commentdate = $commentdate;
    }


}

