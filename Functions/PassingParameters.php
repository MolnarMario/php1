<?php

function bookByAuthorYear($authorName, $year){
    echo $year;
    echo "\n";
    echo $authorName;
}

$year = 1920;
$authorName = "Will";

bookByAuthorYear($authorName, $year);