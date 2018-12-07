<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FormulsRepository")
 */
class Formuls
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $number;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $formula;

    /**
     * @ORM\Column(type="integer")
     */
    private $var_one;

    /**
     * @ORM\Column(type="integer")
     */
    private $var_two;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(int $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getFormula(): ?string
    {
        return $this->formula;
    }

    public function setFormula(string $formula): self
    {
        $this->formula = $formula;

        return $this;
    }

    public function getVarOne(): ?int
    {
        return $this->var_one;
    }

    public function setVarOne(int $var_one): self
    {
        $this->var_one = $var_one;

        return $this;
    }

    public function getVarTwo(): ?int
    {
        return $this->var_two;
    }

    public function setVarTwo(int $var_two): self
    {
        $this->var_two = $var_two;

        return $this;
    }
}
