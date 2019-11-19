<?php

$authors = [
    "Male" => array(
        "Chales Dickens" => array("A Xmas Carol", "Oliver Twist"),
        "Will Shake" => array("R and J", "Richard III"),
        "Mark Twain" => array("Tom Sawyer", "Huck Finn")
    ),
    "Female" => array(
        "L M Motgomery" => array("Anne of Green Gables", "Anne of Avonlea"),
        "L M Alcott" => array("Little Women")
        )
        
];

print_r ($authors['Male']['Will Shake'][1]);

