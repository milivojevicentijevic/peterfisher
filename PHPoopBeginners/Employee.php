<?php
require_once 'Person.php';
class Employee extends Person
{
    private $jobTitle;
    private $jobNumber;

    public function __construct($jobTitle, $firstName, $lastName, $gender) {
        $this->jobTitle = $jobTitle;
        parent::__construct($firstName, $lastName, $gender);
    }
    public function sayHello() {
        return "Hello, I'm an employee. My name is $this->firstName $this->lastName<br>";
    }   // it wouldn't be possible to execute if the properties were private
    public function __set($name, $value) {
        $this->$name = ucfirst($value);
    }
    public function __get($name) {
        return $this->$name;
    } 
}