<?php

require_once('Employee.php');
require_once('person.php');


$employee = new Employee;

var_dump($employee instanceof Employee); // هل ال امبلوي موروث من نفسه
var_dump($employee instanceof person);// هل ال امبلوي وارث من ال بيرسون

var_dump($employee->walking());

