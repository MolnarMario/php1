<?php

$authors = ["Charles dickes", "Jane Austin", "William Shakespeare", "Mark Twain", "L M Allcot"];
$authors = [];
$count = count($authors);

if($count > 0)
{
    echo "There is a total of ".$count." author(s)";
}
else
{
    echo "There are no authors";
}