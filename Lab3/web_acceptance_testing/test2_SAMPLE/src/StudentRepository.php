<?php

namespace Tudublin;

class StudentRepository
{
    private  $students = [];

    public function __construct()
    {
        $studentFixtures = new StudentFixtures();
        $this->students = $studentFixtures->getStudentArray();
    }

    public function findAll()
    {
        return $this->students;
    }

    public function find(int $id)
    {
        return $this->students[$id];
    }

}