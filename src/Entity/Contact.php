<?php

namespace App\Entity;

use App\Repository\ContactRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ContactRepository::class)
 */
class Contact
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Name;

    /**
     * @ORM\Column(type="string", length=300, nullable=true)
     */
    private $Compagny_Name;

    /**
     * @ORM\Column(type="text")
     */
    private $body_text;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mail;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getCompagnyName(): ?string
    {
        return $this->Compagny_Name;
    }

    public function setCompagnyName(?string $Compagny_Name): self
    {
        $this->Compagny_Name = $Compagny_Name;

        return $this;
    }

    public function getBodyText(): ?string
    {
        return $this->body_text;
    }

    public function setBodyText(string $body_text): self
    {
        $this->body_text = $body_text;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }
}
