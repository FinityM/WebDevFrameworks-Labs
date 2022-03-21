<?php
// must read in TelecomDevice BEFORE Phone
// in order for Phone to be able to subclass it ...
require_once "Person.php";
require_once "Student.php";

$student1 = new Student();

// use inherited accessor methods to set name
$student1->setFirstName("Matt");
$student1->setSurname("Smith");

// directly access public 'gpa' property of class Student
$student1->gpa =  4; // a perfect record of 'A' grades !

print $student1->getFirstName()
    . " " . $student1->getSurname()
    . " has GPA = " . $student1->gpa;
print "\n";