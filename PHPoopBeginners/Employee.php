<?php
require_once 'Person.php';
class Employee extends Person{
    public $jobTitle;

    public function __construct($jobTitle, $firstName, $lastName, $gender) {
        $this->jobTitle = $jobTitle;
        parent::__construct($firstName, $lastName, $gender);
    }
    public function getJobTitle() {
        return $this->jobTitle."<br>";
    }
}