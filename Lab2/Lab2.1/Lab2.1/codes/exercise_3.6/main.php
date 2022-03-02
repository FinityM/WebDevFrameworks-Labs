<?php
require_once "autoload.php";

$phone1 = new Phone();
$phone1->setFrequency(888);
$phone1->setMake("Apple");

print $phone1;
