<?php

namespace App\Entity;

use DateTimeImmutable;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\PostRepository;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: PostRepository::class)]
class Post
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    #[Assert\NotNull]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotNull]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotNull]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotNull]
    private ?string $imagePath = null;

    #[ORM\Column]
    #[Assert\NotNull]
    #[Assert\DateTime]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\Column(nullable: true)]
    private ?string $drawingAt = null;

    public function __construct()
    {
        $this -> created_at = new DateTimeImmutable();
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImagePath(): ?string
    {
        return $this->imagePath;
    }

    public function setImagePath(string $imagePath): self
    {
        $this->imagePath = $imagePath;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getDrawingAt(): ?\DateTimeImmutable
    {
        return $this->drawingAt;
    }

    public function setDrawingAt(string $drawingAt): self
    {
        $this->drawingAt = $drawingAt;

        return $this;
    }
}
