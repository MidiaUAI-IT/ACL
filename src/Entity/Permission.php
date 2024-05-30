<?php

namespace Midiauai\ACL\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Permission
 *
 * @ORM\Table(name="permission")
 * @ORM\Entity
 */
class Permission extends AbstractEntity
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="controller", type="string", length=70, nullable=false, unique=false)
     */
    private $controller;

    /**
     * @var string
     *
     * @ORM\Column(name="actions", type="string", length=307, nullable=false, unique=false)
     */
    private $actions;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="date", nullable=false, unique=false)
     */
    private $createdAt;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set controller.
     *
     * @param string $controller
     *
     * @return Permission
     */
    public function setController($controller)
    {
        $this->controller = $controller;

        return $this;
    }

    /**
     * Get controller.
     *
     * @return string
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * Set actions.
     *
     * @param string $actions
     *
     * @return Permission
     */
    public function setActions($actions)
    {
        $this->actions = $actions;

        return $this;
    }

    /**
     * Get actions.
     *
     * @return string
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime $createdAt
     *
     * @return Permission
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt.
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}
