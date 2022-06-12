<?php

$myfile = fopen("gotit.txt", "w");
$txt = "lat: " . $_GET["lat"] . "\nlong: " . $_GET["long"];
fwrite($myfile, $txt);
fclose($myfile);

?>