<?php

namespace Acme\ManagementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\ManagementBundle\Entity\Task
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Task
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
     * @var date $date
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var time $time_start
     *
     * @ORM\Column(name="time_start", type="time")
     */
    private $time_start;

    /**
     * @var time $time_end
     *
     * @ORM\Column(name="time_end", type="time")
     */
    private $time_end;

    /**
     * @var text $description
     *
     * @ORM\Column(name="description", type="text")
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
     * Set project
     *
     * @param string $project
     */
    public function setProject($project)
    {
        $this->project = $project;
    }

    /**
     * Get project
     *
     * @return string 
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Set user
     *
     * @param string $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return string 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set priority
     *
     * @param string $priority
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
    }

    /**
     * Get priority
     *
     * @return string 
     */
    public function getPriority()
    {
        return $this->priority;
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
     * Set date
     *
     * @param date $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Get date
     *
     * @return date 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set time_start
     *
     * @param time $timeStart
     */
    public function setTimeStart($timeStart)
    {
        $this->time_start = $timeStart;
    }

    /**
     * Get time_start
     *
     * @return time 
     */
    public function getTimeStart()
    {
        return $this->time_start;
    }

    /**
     * Set time_end
     *
     * @param time $timeEnd
     */
    public function setTimeEnd($timeEnd)
    {
        $this->time_end = $timeEnd;
    }

    /**
     * Get time_end
     *
     * @return time 
     */
    public function getTimeEnd()
    {
        return $this->time_end;
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
     * @ORM\ManyToOne(targetEntity="Project", inversedBy="tasks")
     * @ORM\JoinColumn(name="project_id", referencedColumnName="id")
     */
    protected $project;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="tasks")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;
    
    /**
     * @ORM\ManyToOne(targetEntity="Priority", inversedBy="tasks")
     * @ORM\JoinColumn(name="priority_id", referencedColumnName="id")
     */
    protected $priority;
    
    /**
     * @ORM\ManyToOne(targetEntity="Status", inversedBy="tasks")
     * @ORM\JoinColumn(name="status_id", referencedColumnName="id")
     */
    protected $status;

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
}