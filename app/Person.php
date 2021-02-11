<?php
//Q1
// Create a class Person in the App namespace. It should accept a first and last name on creation. It should have a sayHelloTo() method that takes another Person and says hello to them. Make sure your properties are all private.

namespace App;

class Person
{
    private $firstName; // declaring our properties 
    private $lastName;

    public function __construct($firstName, $lastName) // construtor to install object properties
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function fullName()
    {
       return "{$this->firstName} {$this->lastName}";
    }

    public function sayHelloTo($person)
    {
       return "Hello {$person->fullName()}";
    }

}       
