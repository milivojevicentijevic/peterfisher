<?php
class Person 
{
    const EYE_COLOR = 'brown';
    protected $firstName;
    protected $lastName;
    private $gender;

    public function __construct($firstName, $lastName, $gender) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->gender = $gender;
        echo self::EYE_COLOR;
    }
    public function sayHello() {
        return "Hello, my name is $this->firstName $this->lastName<br>";
    }
    public function getGender() {
        return $this->gender."<br>";
    }
}