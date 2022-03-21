<?php

class Student extends Person
{
    public float $gpa;

    public function getWholeName(): String
    {
        return $this->firstName . " " . $this->surname;
    }
}
