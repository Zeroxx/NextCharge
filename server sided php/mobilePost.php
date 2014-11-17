<?php

$myFile = "mobile.json";
$fh = fopen($myFile, 'r') or die("impossible to open file");
$contents = fread($fh, filesize($myFile));
fclose($fh);

print_r($_POST);

if (!empty($contents)) {
$devices = json_decode($contents, true);
}

$devices[ $_POST["deviceID"]]['device'] = $_POST["device"];
$devices[ $_POST["deviceID"]]['batteryLevel'] = $_POST["batteryLevel"];
$devices[ $_POST["deviceID"]]['batteryState'] = $_POST["batteryState"];

$stringData = json_encode($devices);
$fh = fopen($myFile, 'w');
fwrite($fh, $stringData);
fclose($fh);

echo "success";

?>
