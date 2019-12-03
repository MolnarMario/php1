<?php

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
        return self::$centuryPopular;
    }
}
