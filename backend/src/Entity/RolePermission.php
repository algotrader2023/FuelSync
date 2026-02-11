<?php

namespace App\Entity;

use App\Repository\RolePermissionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RolePermissionRepository::class)]
class RolePermission
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $role_id = null;

    #[ORM\Column]
    private ?int $permission_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getRoleId(): ?int
    {
        return $this->role_id;
    }

    public function setRoleId(int $role_id): static
    {
        $this->role_id = $role_id;

        return $this;
    }

    public function getPermissionId(): ?int
    {
        return $this->permission_id;
    }

    public function setPermissionId(int $permission_id): static
    {
        $this->permission_id = $permission_id;

        return $this;
    }
}
