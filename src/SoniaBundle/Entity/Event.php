<?php

namespace SoniaBundle\Entity;


use AppBundle\Entity\User;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\JoinTable;
use Doctrine\ORM\Mapping\ManyToMany;
use SBC\NotificationsBundle\Builder\NotificationBuilder;
use SBC\NotificationsBundle\Model\NotifiableInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * @ORM\Entity(repositoryClass="SoniaBundle\Repository\EventRepository")
 */


/**
 * Event
 *
 * @ORM\Table(name="event")
 * @ORM\Entity(repositoryClass="SoniaBundle\Repository\EventRepository")
 * @UniqueEntity("nomEvent",message="This name is already taken  by other Event ")
 * @UniqueEntity("dateEvent",message="This date is already used")
 */
class Event implements NotifiableInterface
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
     * @ORM\Column(name="nomEvent", type="string", length=255)
     * @Assert\NotBlank(message="Please insert an Name")
     * @Assert\Length(
     *     min= "3",
     *     max= "15",
     *     minMessage = "Name is too short",
     *     maxMessage = "Name is too long"
     * )
     */
    private $nomEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="typeEvent", type="string", length=255)
     */
    private $typeEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     * @Assert\NotBlank(message="Please insert an Description")
     * @Assert\Length(
     *     min= "3",
     *     minMessage="The Description is too short"
     * )
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="dateEvent", type="string", length=255)
     * @Assert\NotBlank(message="Please choose a Date")
     */
    private $dateEvent;

    /**
     * @var string
     *
     * @ORM\Column(name="placeEvent", type="string", length=255, nullable=true)
     * @Assert\NotBlank(message="Please choose a Place ")
     */
    private $placeEvent;

    /**
     * @var int
     * @Assert\NotBlank(message="Please choose a number ")
     * @ORM\Column(name="nbParticipants", type="integer")
     */
    private $nbParticipants;

    /**
     * @var string
     *
     * @ORM\Column(name="theme", type="string", length=255, nullable=true)
     */
    private $theme;

    /**
     * @var string
     *
     * @ORM\Column(name="destination", type="string", length=255, nullable=true)
     */
    private $destination;

    /**
     * @var float
     *
     * @ORM\Column(name="award", type="float", nullable=true)
     * *@Assert\GreaterThan(
     *     value =0,
     * )
     *@Assert\Type(type="float",message="Award must contain only numbers")
     */
    private $award;

    /**
     * @var float
     *@Assert\GreaterThan(
     *     value =0,
     * )
     *@Assert\Type(type="float",message="Budget must contain only numbers")
     * @ORM\Column(name="budget", type="float", nullable=true)
     *@Assert\NotBlank(message="Please choose a budget ")
     *
     */
    private $budget;

    /**
     * @var float
     *@Assert\GreaterThan(
     *     value =0,
     * )
     *@Assert\Type(type="float",message="Price must contain only numbers")
     * @ORM\Column(name="price", type="float", nullable=true)
     * @Assert\NotBlank(message="Please choose a price ")
     */
    private $price;

    /**
     * Many Users have Many Groups.
     * @ManyToMany(targetEntity="AppBundle\Entity\User")
     * @JoinTable(name="User_byEvent",
     *      joinColumns={@JoinColumn(name="event_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="user_id", referencedColumnName="id")}
     *      )
     */
          private $users;

    /**
     * Default constructor, initializes collections
     */
    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    public function addEventUser(User $user) {

//Avoid duplication
        if ($this->users->contains($user ))
        { return ;}

        $this->users[] = $user;
    }

    /**
     * @return ArrayCollection
     */
    public function getUsers()
    {
        return $this->users;
    }



    /**
     * @return float
     */
    public function getAward()
    {
        return $this->award;
    }

    /**
     * @param float $award
     */
    public function setAward($award)
    {
        $this->award = $award;
    }

    /**
     * @return float
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * @param float $budget
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;
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
     * Set nomEvent
     *
     * @param string $nomEvent
     *
     * @return Event
     */
    public function setNomEvent($nomEvent)
    {
        $this->nomEvent = $nomEvent;
    
        return $this;
    }

    /**
     * Get nomEvent
     *
     * @return string
     */
    public function getNomEvent()
    {
        return $this->nomEvent;
    }

    /**
     * Set typeEvent
     *
     * @param string $typeEvent
     *
     * @return Event
     */
    public function setTypeEvent($typeEvent)
    {
        $this->typeEvent = $typeEvent;
    
        return $this;
    }

    /**
     * Get typeEvent
     *
     * @return string
     */
    public function getTypeEvent()
    {
        return $this->typeEvent;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Event
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dateEvent
     *
     * @param string $dateEvent
     *
     * @return Event
     */
    public function setDateEvent($dateEvent)
    {
        $this->dateEvent = $dateEvent;
        /*$day = $dateEvent->format('d');
        $month =$dateEvent->format('m');
        $year = $dateEvent->format('Y');

        $dateEvent = $day.'/'.$month.'/'.$year;
*/
        return $this;
    }

    /**
     * Get dateEvent
     *
     * @return string
     */
    public function getDateEvent()
    {
        return $this->dateEvent;
    }

    /**
     * Set placeEvent
     *
     * @param string $placeEvent
     *
     * @return Event
     */
    public function setPlaceEvent($placeEvent)
    {
        $this->placeEvent = $placeEvent;
    
        return $this;
    }

    /**
     * Get placeEvent
     *
     * @return string
     */
    public function getPlaceEvent()
    {
        return $this->placeEvent;
    }

    /**
     * Set nbParticipants
     *
     * @param integer $nbParticipants
     *
     * @return Event
     */
    public function setNbParticipants($nbParticipants)
    {
        $this->nbParticipants = $nbParticipants;
    
        return $this;
    }

    /**
     * Get nbParticipants
     *
     * @return integer
     */
    public function getNbParticipants()
    {
        return $this->nbParticipants;
    }

    /**
     * Set theme
     *
     * @param string $theme
     *
     * @return Event
     */
    public function setTheme($theme)
    {
        $this->theme = $theme;
    
        return $this;
    }

    /**
     * Get theme
     *
     * @return string
     */
    public function getTheme()
    {
        return $this->theme;
    }

    /**
     * Set destination
     *
     * @param string $destination
     *
     * @return Event
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
    
        return $this;
    }

    /**
     * Get destination
     *
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function notificationsOnCreate(NotificationBuilder $builder)
    {
        $notif = new Notification();
        $notif->setTitle('New Event')
            ->setDescription($this->nomEvent)
            ->setRoute('afficherEvent')
            ->setParameters(array('id' => $this->id));
        $builder->addNotification($notif);
        return $builder;
    }

    public function notificationsOnUpdate(NotificationBuilder $builder)
    {
        $notif = new Notification();
        $notif->setTitle('Updated Event')
            ->setDescription($this->nomEvent)
            ->setRoute('modifierEvent')
            ->setParameters(array('id' => $this->id));
        $builder->addNotification($notif);
        return $builder;
    }

    public function notificationsOnDelete(NotificationBuilder $builder)
    {
        return $builder;
    }


}

