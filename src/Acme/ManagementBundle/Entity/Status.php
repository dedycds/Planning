<?php

namespace Acme\ManagementBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
// for validating input
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Acme\ManagementBundle\Entity\Status
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Status
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @var text $description
     *
     * @ORM\Column(name="description", type="text")
     * @Assert\NotBlank()
     */
    private $description;


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
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param text $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * @ORM\OneToMany(targetEntity="Project", mappedBy="status")
     */
    protected $projects;
    
    /**
     * @ORM\OneToMany(targetEntity="Task", mappedBy="status")
     */
    protected $statuses;

    public function __construct()
    {
        $this->projects = new ArrayCollection();
        $this->statuses = new ArrayCollection();
    }
    
    public function __toString() { return $this->name; }

    /**
     * Add projects
     *
     * @param Acme\ManagementBundle\Entity\Project $projects
     */
    public function addProject(\Acme\ManagementBundle\Entity\Project $projects)
    {
        $this->projects[] = $projects;
    }

    /**
     * Get projects
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getProjects()
    {
        return $this->projects;
    }

    /**
     * Add statuses
     *
     * @param Acme\ManagementBundle\Entity\Task $statuses
     */
    public function addTask(\Acme\ManagementBundle\Entity\Task $statuses)
    {
        $this->statuses[] = $statuses;
    }

    /**
     * Get statuses
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getStatuses()
    {
        return $this->statuses;
    }
}