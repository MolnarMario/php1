<?php

$authors = [
    "Male" => array(
        "Chales Dickens" => array("A Xmas Carol", "Oliver Twist"),
        "Will Shake" => array("R and J", "Richard 3"),
        "Mark Twain" => array("Tom Sawyer", "Huck Finn")
    ),
    "Female" => array(
        "L M Motgomery" => array("Anne of Green Gables", "Anne of Avonlea"),
        "L M Alcott" => array("Little Women")
        )
        
];

echo count($authors, COUNT_RECURSIVE);

