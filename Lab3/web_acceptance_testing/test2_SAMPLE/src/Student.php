<?php

namespace Tudublin;

class Student
{
    private int $id;
    private string $name;
    private float $gpa;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getGpa(): float
    {
        return $this->gpa;
    }

    public function setGpa(float $gpa): void
    {
        $this->gpa = $gpa;
    }

    public function __toString(): string
    {
        return "STUDENT: id = {$this->id}, name = {$this->name}, gpa = {$this->gpa}";
    }
}