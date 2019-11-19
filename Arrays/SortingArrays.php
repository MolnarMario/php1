<?php

$authors = array("Charles D", 
    "Jane Austin", 
    "Will Shake", 
    "Mark Twain", 
    "L M Alcott", 
    );

$authorsAssociative = array(
    "quarky" => "Charles Dickens",
    "brilliant"=> "Jane Austin",
    "poetic" => "William Shakespeare",
);

ksort($authorsAssociative);
print_r($authorsAssociative);
