<?php
require_once "Module.php";

$module1 = new Module();
$module1->setId(99);
$module1->title = "OOAD";

print $module1->title;
print " is a module with ID = " . $module1->getId();
print "\n";
