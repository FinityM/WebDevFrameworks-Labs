<?php

namespace MKDev;

class Student
{
    const MAX_GPA = 4;
    private $id = -1;
    private $gpa;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getGpa()
    {
        return $this->gpa;
    }

    public function setGpa($gpa)
    {
        if($gpa < 0 || $gpa > self::MAX_GPA)
            $this->gpa = 0;
        else
            $this->gpa = $gpa;
    }
}