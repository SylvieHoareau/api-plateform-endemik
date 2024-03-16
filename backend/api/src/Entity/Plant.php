<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * This is a dummy entity. Remove it!
 */
#[ApiResource(mercure: true)]
#[ORM\Entity]
class Plant
{
    /**
     * The entity ID
     */
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue(strategy: 'SEQUENCE')]
    private ?int $id = null;

    // Nom commun de la plante
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private ?string $commonName = '';

    // Nom scientifique de la plante
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank
     */
    private ?string $scientificName = '';

    // Catégorie (Faune ou Flore)
    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Choice(choices={"Faune", "Flore"})
     */
    private ?string $category = '';

    // Image 
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private ?string $image = '';

    // Description
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description = '';

    // Programme de lutte
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $controlProgram = '';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommonName(): ?string
    {
        return $this->commonName;
    }

    public function setCommonName(?string $commonName): self
    {
        $this->commonName = $commonName;

        return $this;
    }

    public function getScientificName(): ?string
    {
        return $this->scientificName;
    }

    public function setScientificName(?string $scientificName): self
    {
        $this->scientificName = $scientificName;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(?string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getControlProgram(): ?string
    {
        return $this->controlProgram;
    }

    public function setControlProgram(?string $controlProgram): self
    {
        $this->controlProgram = $controlProgram;

        return $this;
    }
}
