<?php

$authors = array("Charles Dickens", "Jane Austin", "William Shakespeare");

$authorsAssociative = array(
    "quarky" => "Charles Dickens",
    "brilliant"=> "Jane Austin",
    "poetic" => "William Shakespeare",
);

echo array_key_exists('poetic', $authorsAssociative);

//echo $authorsAssociative['quarky'];
//echo $authors[1];
