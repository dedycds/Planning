<?php

namespace Acme\ManagementBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Encoder\EncoderFactory;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\ManagementBundle\Entity\User
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class User implements UserInterface
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
     * @var string $username
     *
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;
    
    /**
     * @ORM\ManyToMany(targetEntity="Role")
     * @ORM\JoinTable(name="user_role",
     *     joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *     inverseJoinColumns={@ORM\JoinColumn(name="role_id", referencedColumnName="id")}
     * )
     *
     * @var ArrayCollection $user_roles
     */
    protected $user_roles;
    
    /**
     * @ORM\OneToMany(targetEntity="Project", mappedBy="user")
     */
    protected $projects;
    
    /**
     * @ORM\OneToMany(targetEntity="Task", mappedBy="user")
     */
    protected $tasks;

    /**
     * Constructs a new instance of User
     */
    public function __construct()
    {
        $this->projects = new ArrayCollection();
        $this->tasks = new ArrayCollection();
    }
    
    public function __toString() { return $this->username; }
    
    /**
     * Gets the user roles.
     *
     * @return ArrayCollection A Doctrine ArrayCollection
     */
    public function getUserRoles()
    {
        return $this->user_roles;
    }
    
    /**
     * Gets an array of roles.
     * 
     * @return array An array of Role objects
     */
    function getRoles()
    {
        return $this->getUserRoles()->toArray();
    }
    
    function setUserRoles($role)
    {
       $this->user_roles = $role; 
    }

    /**
     * @ORM\Column(type="string", length="255")
     *
     * @var string salt
     */
    protected $salt;
    
    /**
     * Gets the user salt.
     *
     * @return string The salt.
     */
    function getSalt()
    {
        if (null === $this->salt) {
            $this->salt = md5(sprintf(
                '%s_%d_%f',
                uniqid(),
                rand(0, 99999),
                microtime(true)
            ));
        }
        
        return $this->salt;
    }
    
    /**
     * Erases the user credentials.
     */
    function eraseCredentials(){}

    /**
     * Compares this user to another to determine if they are the same.
     * 
     * @param UserInterface $user The user
     * @return boolean True if equal, false othwerwise.
     */
    function equals(UserInterface $user)
    {
//        return ($user->getUsername() === $this->getUsername()) && ($user->getPassword() === $this->getPassword());
        if ($this->password !== $user->getPassword()) {
            return false;
        }
 
 
        if ($this->username !== $user->getUsername()) {
            return false;
        }
 
        return true;
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
     * Set username
     *
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     */
    public function setPassword($password)
    {

        $this->password = $password;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    }

    /**
     * Add user_roles
     *
     * @param Acme\ManagementBundle\Entity\Role $userRoles
     */
    public function addRole(\Acme\ManagementBundle\Entity\Role $userRoles)
    {
        $this->user_roles[] = $userRoles;
    }

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
}