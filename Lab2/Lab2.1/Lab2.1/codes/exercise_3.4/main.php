<?php
require_once "TelecomDevice.php";
require_once "Phone.php";

$phone1 = new Phone();
$phone1->setFrequency(888);
$phone1->setMake("Apple");

print $phone1;
