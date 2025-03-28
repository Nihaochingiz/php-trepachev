<?php

class Employee 
{
    public $name;
    public $age;
    public $salary;

    public function getName() {
        return $this->name;
    }
    public function getAge() {
        return $this->age;
    }
    public function getSalary() {
        return $this->salary;
    }
    public function checkAge() {
        $age = $this->age;
        if ($age > 18) {
            return true;
        }
        return false;
    }

    public function doubleSalary() {
        return $this->salary * 2;
    }
}

$employee = new Employee;

$employee->name = 'Andrey';
$employee->age = 19;
$employee->salary = 25000;

echo($employee->getName(). PHP_EOL);
echo($employee->getAge(). PHP_EOL);
echo($employee->getSalary(). PHP_EOL);
echo($employee->checkAge(). PHP_EOL);
echo($employee->doubleSalary(). PHP_EOL);