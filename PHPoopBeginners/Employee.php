<?php
require_once 'Person.php';
class Employee extends Person
{
    static $payeNumber = 100;
    const COMPANY_NAME = 'ACME';
    private $jobTitle;
    private static $jobNumber = 10;

    public static function generatePayslip() {
        return self::$bloodType;
    }

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