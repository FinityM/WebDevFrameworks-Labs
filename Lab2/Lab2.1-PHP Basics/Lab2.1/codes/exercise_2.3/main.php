<?php

require_once "Phone.php";

$phone1 = new Phone();

$phone1->setMake("Apple");

print $phone1->getMake() . " is a popular make of phone";