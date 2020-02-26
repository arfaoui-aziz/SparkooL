<?php

namespace ParentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * reclamation
 *
 * @ORM\Table(name="reclamationParent")
 * @ORM\Entity(repositoryClass="ParentBundle\Repository\reclamationRepository")
 */
class reclamation
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
     * @ORM\Column(name="type", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\Choice(
     * choices = { "Parent","Teacher","Student"},
     * message = "choose one "
     * )
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="typeuser", type="string", length=255)
     */
    private $typeuser;

    /**
     * @var string
     *
     * @ORM\Column(name="datecree", type="string", length=255)
     */
    private $datecree;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=255)
     * @Assert\NotBlank
     */
    private $message;

 /**
 * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
 * @ORM\JoinColumn(name="id_Parent",referencedColumnName="id")
 */
    private $parent;



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
     * Set type
     *
     * @param string $type
     *
     * @return reclamation
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set typeuser
     *
     * @param string $typeuser
     *
     * @return reclamation
     */
    public function setTypeuser($typeuser)
    {
        $this->typeuser = $typeuser;
    
        return $this;
    }

    /**
     * Get typeuser
     *
     * @return string
     */
    public function getTypeuser()
    {
        return $this->typeuser;
    }

    /**
     * @return string
     */
    public function getDatecree()
    {
        return $this->datecree;
    }

    /**
     * @param string $datecree
     */
    public function setDatecree($datecree)
    {
        $this->datecree = $datecree;
    }



    /**
     * Set message
     *
     * @param string $message
     *
     * @return reclamation
     */
    public function setMessage($message)
    {
        $this->message = $message;
    
        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @return mixed
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param mixed $parent
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }


}

