<?php

$myFile = "mobile.json";
$fh = fopen($myFile, 'rw') or die("impossible to open file");
$contents = fread($fh, filesize($myFile));

if ($contents !== '') {
	echo $contents;
}

?>
