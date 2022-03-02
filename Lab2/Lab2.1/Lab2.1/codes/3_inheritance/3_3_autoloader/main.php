<?php
// read in all classes via our 'autoload' script
require_once "autoload.php";

$student1 = new Student();

// use inherited accessor methods to set name
$student1->setFirstName("Matt");
$student1->setSurname("Smith");

// directly access public 'gpa' property of class Student
$student1->gpa =  4; // a perfect record of 'A' grades !

print $student1->getWholeName()
    . " has GPA = " . $student1->gpa;
print "\n";