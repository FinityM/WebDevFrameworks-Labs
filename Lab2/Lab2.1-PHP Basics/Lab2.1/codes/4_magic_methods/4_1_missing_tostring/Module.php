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
}
