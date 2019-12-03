<?php

class Person
{
    const AVG_LIFE_SPAN = 79;
    
    private $firstName;
    private $lastName; 
    private $yearBorn;
    
    function __construct($tempFirstName = "", $tempLastName = "", $tempBorn = "") 
    {
        $this->firstName = $tempFirstName;
        $this->lastName = $tempLastName;
        $this->yearBorn = $tempBorn;
    }

    public function getFirstName()
    {
        return $this->firstName.PHP_EOL;
    }
    
    public function setFirstName($tempName)
    {
        $this->firstName = $tempName;
    }
    protected function getFullName()
    {
        return $this->firstName." ".$this->lastName.PHP_EOL;
    }
}

