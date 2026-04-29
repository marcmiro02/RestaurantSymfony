<?php

namespace App\Entity;

use App\Repository\UsuarisRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UsuarisRepository::class)]
class Usuaris
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $USUARIS_ID = null;

    #[ORM\Column(length: 255)]
    private ?string $USUARIS_NOM = null;

    #[ORM\Column(length: 255)]
    private ?string $USUARIS_COGNOMS = null;

    #[ORM\Column(length: 255)]
    private ?string $USUARIS_EMAIL = null;

    #[ORM\Column(length: 255)]
    private ?string $USUARIS_NICKNAME = null;

    #[ORM\Column(length: 255)]
    private ?string $USUARIS_PASSWORD = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUSUARISID(): ?int
    {
        return $this->USUARIS_ID;
    }

    public function setUSUARISID(int $USUARIS_ID): static
    {
        $this->USUARIS_ID = $USUARIS_ID;

        return $this;
    }

    public function getUSUARISNOM(): ?string
    {
        return $this->USUARIS_NOM;
    }

    public function setUSUARISNOM(string $USUARIS_NOM): static
    {
        $this->USUARIS_NOM = $USUARIS_NOM;

        return $this;
    }

    public function getUSUARISCOGNOMS(): ?string
    {
        return $this->USUARIS_COGNOMS;
    }

    public function setUSUARISCOGNOMS(string $USUARIS_COGNOMS): static
    {
        $this->USUARIS_COGNOMS = $USUARIS_COGNOMS;

        return $this;
    }

    public function getUSUARISEMAIL(): ?string
    {
        return $this->USUARIS_EMAIL;
    }

    public function setUSUARISEMAIL(string $USUARIS_EMAIL): static
    {
        $this->USUARIS_EMAIL = $USUARIS_EMAIL;

        return $this;
    }

    public function getUSUARISNICKNAME(): ?string
    {
        return $this->USUARIS_NICKNAME;
    }

    public function setUSUARISNICKNAME(string $USUARIS_NICKNAME): static
    {
        $this->USUARIS_NICKNAME = $USUARIS_NICKNAME;

        return $this;
    }

    public function getUSUARISPASSWORD(): ?string
    {
        return $this->USUARIS_PASSWORD;
    }

    public function setUSUARISPASSWORD(string $USUARIS_PASSWORD): static
    {
        $this->USUARIS_PASSWORD = $USUARIS_PASSWORD;

        return $this;
    }
}
