<?php

namespace Acme\ManagementBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\ManagementBundle\Entity\Project
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Project
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
     */
    private $name;

    /**
     * @var date $start_date
     *
     * @ORM\Column(name="start_date", type="date")
     */
    private $start_date;

    /**
     * @var date $end_date
     *
     * @ORM\Column(name="end_date", type="date")
     */
    private $end_date;

    /**
     * @var text $description
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string $link_google
     *
     * @ORM\Column(name="link_google", type="string", length=255)
     */
    private $link_google;

    /**
     * @var string $link_draft
     *
     * @ORM\Column(name="link_draft", type="string", length=255)
     */
    private $link_draft;


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
     * Set start_date
     *
     * @param date $startDate
     */
    public function setStartDate($startDate)
    {
        $this->start_date = $startDate;
    }

    /**
     * Get start_date
     *
     * @return date 
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * Set end_date
     *
     * @param date $endDate
     */
    public function setEndDate($endDate)
    {
        $this->end_date = $endDate;
    }

    /**
     * Get end_date
     *
     * @return date 
     */
    public function getEndDate()
    {
        return $this->end_date;
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
     * Set link_google
     *
     * @param string $linkGoogle
     */
    public function setLinkGoogle($linkGoogle)
    {
        $this->link_google = $linkGoogle;
    }

    /**
     * Get link_google
     *
     * @return string 
     */
    public function getLinkGoogle()
    {
        return $this->link_google;
    }

    /**
     * Set link_draft
     *
     * @param string $linkDraft
     */
    public function setLinkDraft($linkDraft)
    {
        $this->link_draft = $linkDraft;
    }

    /**
     * Get link_draft
     *
     * @return string 
     */
    public function getLinkDraft()
    {
        return $this->link_draft;
    }
    
    /**
     * @ORM\OneToMany(targetEntity="Task", mappedBy="project")
     */
    protected $tasks;
    
    public function __construct()
    {
        $this->tasks = new ArrayCollection();
    }
    
    /**
     * @ORM\ManyToOne(targetEntity="Project_Category", inversedBy="projects")
     * @ORM\JoinColumn(name="project_category_id", referencedColumnName="id")
     */
    protected $project_category;
    
    public function getProject_category()
    {
        return $this->project_category;
    }
    
    /**
     * @ORM\ManyToOne(targetEntity="Project_Type", inversedBy="projects")
     * @ORM\JoinColumn(name="project_type_id", referencedColumnName="id")
     */
    protected $project_type;
    
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="projects")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;
    
    /**
     * @ORM\ManyToOne(targetEntity="Status", inversedBy="projects")
     * @ORM\JoinColumn(name="status_id", referencedColumnName="id")
     */
    protected $status;
    
    /**
     * @ORM\ManyToOne(targetEntity="Priority", inversedBy="projects")
     * @ORM\JoinColumn(name="priority_id", referencedColumnName="id")
     */
    protected $priority;

    /**
     * Add tasks
     *
     * @param Acme\ManagementBundle\Entity\Task $tasks
     */
    public function addTask(\Acme\ManagementBundle\Entity\Task $tasks)
    {
        $this->tasks[] = $tasks;
    }

    /**
     * Get tasks
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getTasks()
    {
        return $this->tasks;
    }

    /**
     * Set project_category
     *
     * @param Acme\ManagementBundle\Entity\Project_Category $projectCategory
     */
    public function setProjectCategory(\Acme\ManagementBundle\Entity\Project_Category $projectCategory)
    {
        $this->project_category = $projectCategory;
    }

    /**
     * Get project_category
     *
     * @return Acme\ManagementBundle\Entity\Project_Category 
     */
    public function getProjectCategory()
    {
        return $this->project_category;
    }

    /**
     * Set project_type
     *
     * @param Acme\ManagementBundle\Entity\Project_Type $projectType
     */
    public function setProjectType(\Acme\ManagementBundle\Entity\Project_Type $projectType)
    {
        $this->project_type = $projectType;
    }

    /**
     * Get project_type
     *
     * @return Acme\ManagementBundle\Entity\Project_Type 
     */
    public function getProjectType()
    {
        return $this->project_type;
    }

    /**
     * Set user
     *
     * @param Acme\ManagementBundle\Entity\User $user
     */
    public function setUser(\Acme\ManagementBundle\Entity\User $user)
    {
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return Acme\ManagementBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set status
     *
     * @param Acme\ManagementBundle\Entity\Status $status
     */
    public function setStatus(\Acme\ManagementBundle\Entity\Status $status)
    {
        $this->status = $status;
    }

    /**
     * Get status
     *
     * @return Acme\ManagementBundle\Entity\Status 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set priority
     *
     * @param Acme\ManagementBundle\Entity\Priority $priority
     */
    public function setPriority(\Acme\ManagementBundle\Entity\Priority $priority)
    {
        $this->priority = $priority;
    }

    /**
     * Get priority
     *
     * @return Acme\ManagementBundle\Entity\Priority 
     */
    public function getPriority()
    {
        return $this->priority;
    }
}