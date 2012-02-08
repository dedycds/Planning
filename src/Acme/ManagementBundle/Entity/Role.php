<?php

namespace Acme\ManagementBundle\Entity;

use Symfony\Component\Security\Core\Role\RoleInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Acme\ManagementBundle\Entity\Role
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Role implements RoleInterface
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
     * @var datetime $create_at
     *
     * @ORM\Column(name="create_at", type="datetime")
     */
    private $create_at;


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
     * Set create_at
     *
     * @param datetime $createAt
     */
    public function setCreateAt($createAt)
    {
        $this->create_at = $createAt;
    }

    /**
     * Get create_at
     *
     * @return datetime 
     */
    public function getCreateAt()
    {
        return $this->create_at;
    }
    
    /**
     * Consturcts a new instance of Role.
     */
    public function __construct()
    {
        $this->createdAt = new DateTime();
    }

    public function getRole()
    {
        return $this->getName();
    }
    public function __toString() { return $this->name; }
}