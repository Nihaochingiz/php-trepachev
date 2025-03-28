<?php

class Employee 
{
    public $name;
    public $age;
    public $salary;
}

$juniorEmployee = new Employee;

$juniorEmployee->name = 'Sergey';
$juniorEmployee->age = '25';
$juniorEmployee->salary = 50000;


$seniorEmployee = new Employee;

$seniorEmployee->name = 'Dmitriy';
$seniorEmployee->age = '45';
$seniorEmployee->salary = 300000;


echo($juniorEmployee->name);
echo PHP_EOL; 
echo($seniorEmployee->name);
echo PHP_EOL;

echo($juniorEmployee->salary + $seniorEmployee->salary );
echo PHP_EOL;

echo($juniorEmployee->age + $seniorEmployee->age );
echo PHP_EOL; 