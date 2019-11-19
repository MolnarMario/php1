<?php

function booksByAuthorYear ($tempAuthorName, $tempYear = 1910){
    echo $tempAuthorName;
    echo "\n";
    echo $tempYear;
    echo "\n";
 
}

function getAuthor(){
    return "Charles Dickens";
}

getAuthor();

$year = 1920;
$authorName = getAuthor();

booksByAuthorYear($authorName);
