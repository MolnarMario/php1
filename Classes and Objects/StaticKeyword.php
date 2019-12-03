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

class Author extends Person
{
    static public $centuryPopular = "19th";
    private $penName = "Mark Twain";
    
    public function getPenName()
    {
        return $this->penName.PHP_EOL;
    }
        public function getCompleteName()
    {
        return $this->getFullName()." a.k.a ".$this->penName.PHP_EOL;
    }
    public static function getCenturyAuthorWasPopular()
    {
        
    }
}
