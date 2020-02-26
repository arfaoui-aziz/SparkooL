<?php

namespace EtudiantBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Forum
 *
 * @ORM\Table(name="forum")
 * @ORM\Entity(repositoryClass="EtudiantBundle\Repository\ForumRepository")
 */
class Forum
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
     * @Assert\NotBlank(message="Please insert a Title")
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     * @Assert\NotBlank(message="Please choose a Categorie")
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }


    /**
     * @var string
     * @Assert\NotBlank(message="Please insert a subject")
     * @Assert\Length(
     *     min= "4",
     *     minMessage = "Name is too short",
     * )
     * @ORM\Column(name="subject", type="text")
     */
    private $subject;


    /**
     * @var string
     *
     * @ORM\Column(name="dateajout", type="string", length=255)
     */
    private $dateajout;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="boolean")
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="solved", type="boolean")
     */
    private $solved;

    /**
     * @return string
     */
    public function getSolved()
    {
        return $this->solved;
    }

    /**
     * @param string $solved
     */
    public function setSolved($solved)
    {
        $this->solved = $solved;
    }

    /**
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param string $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="nbreponse", type="integer")
     */
    private $nbreponse;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="auteur_id",referencedColumnName="id", onDelete="CASCADE")
     */
    private $auteur;

    /**
     * @return string
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * @param string $auteur
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    }

    /**
     * @return string
     */
    public function getDateajout()
    {
        return $this->dateajout;
    }

    /**
     * @param string $dateajout
     */
    public function setDateajout($dateajout)
    {
        $this->dateajout = $dateajout;
    }

    /**
     * @return string
     */
    public function getNbreponse()
    {
        return $this->nbreponse;
    }

    /**
     * @param string $nbreponse
     */
    public function setNbreponse($nbreponse)
    {
        $this->nbreponse = $nbreponse;
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
     * Set title
     *
     * @param string $title
     *
     * @return Forum
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set subject
     *
     * @param string $subject
     *
     * @return Forum
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    
        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    public function __toString()
    {
        return $this->subject;
    }

}

