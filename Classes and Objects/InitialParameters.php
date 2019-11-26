<?php

class Person
{
    const AVG_LIFE_SPAN = 79;
    
    public $firstName;
    public $lastName; 
    public $yearBorn;
    
    function __construct($tempFirstName = "", $tempLastName = "", $tempBorn = "") 
    {
        //echo "I'm in the construtor";
        $this->firstName = $tempFirstName;
        $this->lastName = $tempLastName;
        $this->yearBorn = $tempBorn;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }
    
    public function setFirstName($tempName)
    {
        $this->firstName = $tempName;
    }
}

$myObject = new Person("Samuel Lanhhorne", "Clemens", 1899);
echo $myObject->getFirstName();

