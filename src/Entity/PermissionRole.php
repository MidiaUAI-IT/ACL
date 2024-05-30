<?php

namespace Midiauai\ACL\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PermissionRole
 *
 * @ORM\Table(name="permission_role")
 * @ORM\Entity
 */
class PermissionRole extends \Midiauai\ACL\Entity\AbstractEntity
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
     * @var int
     *
     * @ORM\Column(name="permission_id", type="integer", nullable=false, unique=false)
     */
    private $permissionId;

    /**
     * @var int
     *
     * @ORM\Column(name="role_id", type="integer", nullable=false, unique=false)
     */
    private $roleId;

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
     * Set permissionId.
     *
     * @param int $permissionId
     *
     * @return PermissionRole
     */
    public function setPermissionId($permissionId)
    {
        $this->permissionId = $permissionId;

        return $this;
    }

    /**
     * Get permissionId.
     *
     * @return int
     */
    public function getPermissionId()
    {
        return $this->permissionId;
    }

    /**
     * Set roleId.
     *
     * @param int $roleId
     *
     * @return PermissionRole
     */
    public function setRoleId($roleId)
    {
        $this->roleId = $roleId;

        return $this;
    }

    /**
     * Get roleId.
     *
     * @return int
     */
    public function getRoleId()
    {
        return $this->roleId;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime $createdAt
     *
     * @return PermissionRole
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
