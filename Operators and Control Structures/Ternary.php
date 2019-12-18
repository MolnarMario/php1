<?php

$authors = ["Charles Dickes", "Jane Austin", "William Shakespeare", "Mark Twain", "L M Allcot"];
$count = count($authors);

$outcome = ($count > 6) ? "Author Total: ".$count : "No authors";
echo $outcome;