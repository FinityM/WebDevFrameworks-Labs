<?php
class Module
{
    private int $id;
    public String $title;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id):void
    {
       $this->id = $id;
    }

    public function __toString(): String
    {
        return $this->title
            . " is a module with ID = " . $this->getId();
    }
}