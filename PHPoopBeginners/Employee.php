<?php
require_once 'Person.php';
class Employee extends Person{
    private $jobTitle;

    public function __construct($jobTitle, $firstName, $lastName, $gender) {
        $this->setJobTitle($jobTitle);
        parent::__construct($firstName, $lastName, $gender);
    }
    public function sayHello() {
        return "Hello, I'm an employee. My name is $this->firstName $this->lastName<br>";
    }   // it wouldn't be possible to execute if the properties were private
    public function setJobTitle($jobTitle) {
        $this->jobTitle = ucfirst($jobTitle);
    }
    public function getJobTitle() {
        return $this->jobTitle."<br>";
    }
}