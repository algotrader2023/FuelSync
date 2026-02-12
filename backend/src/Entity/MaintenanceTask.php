<?php

namespace App\Entity;

use App\Enum\MaintenanceType;
use App\Repository\MaintenanceTaskRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MaintenanceTaskRepository::class)]
class MaintenanceTask
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(enumType: MaintenanceType::class)]
    private ?MaintenanceType $type = null;

    #[ORM\Column]
    private ?\DateTime $scheduled_date = null;

    #[ORM\Column(length: 255)]
    private ?string $status = null;

    #[ORM\Column(length: 255)]
    private ?string $priority = null;

    #[ORM\Column]
    private ?float $cost = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $completed_at = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Equipment $equipment_id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Technician $assigned_technician_id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(string $id): static
    {
        $this->id = $id;

        return $this;
    }

    public function getEquipmentId(): ?int
    {
        return $this->equipment_id;
    }

    public function setEquipmentId(int $equipment_id): static
    {
        $this->equipment_id = $equipment_id;

        return $this;
    }

    public function getType(): ?MaintenanceType
    {
        return $this->type;
    }

    public function setType(MaintenanceType $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getScheduledDate(): ?\DateTime
    {
        return $this->scheduled_date;
    }

    public function setScheduledDate(\DateTime $scheduled_date): static
    {
        $this->scheduled_date = $scheduled_date;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getPriority(): ?string
    {
        return $this->priority;
    }

    public function setPriority(string $priority): static
    {
        $this->priority = $priority;

        return $this;
    }

    public function getAssignedTechnicianId(): ?int
    {
        return $this->assigned_technician_id;
    }

    public function setAssignedTechnicianId(int $assigned_technician_id): static
    {
        $this->assigned_technician_id = $assigned_technician_id;

        return $this;
    }

    public function getCost(): ?float
    {
        return $this->cost;
    }

    public function setCost(float $cost): static
    {
        $this->cost = $cost;

        return $this;
    }

    public function getCompletedAt(): ?\DateTimeImmutable
    {
        return $this->completed_at;
    }

    public function setCompletedAt(\DateTimeImmutable $completed_at): static
    {
        $this->completed_at = $completed_at;

        return $this;
    }
}
