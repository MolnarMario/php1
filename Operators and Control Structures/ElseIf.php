<?php

$authors = ["Charles Dickes"];
//$authors = [];
$count = count($authors);

if($count == 1)
{
    echo "There is 1 author";
}
elseif($count > 1)
{
    echo "There is a total of ".$count." authors";
}
else
{
    echo "There are no authors";
}
