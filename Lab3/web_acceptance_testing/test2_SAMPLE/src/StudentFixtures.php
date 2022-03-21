<?php

namespace Tudublin;

class StudentFixtures
{
    public function getStudentArray()
    {
        $students = [];

        $s1 = new Student();
        $s1->setName('matt murphy');
        $s1->setGpa(3.5);
        $s1->setId(1);
        $students[1] = $s1;


        $s2 = new Student();
        $s2->setName('Joan Jones');
        $s2->setGpa(3.75);
        $s2->setId(2);
        $students[2] = $s2;

        $s3 = new Student();
        $s3->setName('another student');
        $s3->setGpa(2);
        $s3->setId(3);
        $students[3] = $s3;

        $s4 = new Student();
        $s4->setName('student99');
        $s4->setGpa(0.5);
        $s4->setId(4);
        $students[4] = $s4;

        return $students;
    }
}