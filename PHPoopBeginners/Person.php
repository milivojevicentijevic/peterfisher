<?php
class Person {
    public $firstName;
    public $lastName;
    public $gender;

    public function __construct($firstName, $lastName, $gender) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
    }
    public function sayHello() {
        return "Hello, my name is $this->firstName $this->lastName<br>";
    }
    public function getGender() {
        return $this->gender."<br>";
    }
}