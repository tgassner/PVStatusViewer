<?php
$url = "http://worldtimeapi.org/api/timezone/Europe/Vienna";
$jsonString = file_get_contents($url);
$json = json_decode($jsonString);
$fullDateTime = $json->datetime;
$dateTimeWithT = substr($fullDateTime, 0, 19);
$dateTimeNow = str_replace("T", "%20", $dateTimeWithT);
$dateTimeStart = substr($dateTimeNow, 0, 13) . "05:44:00";

$dateTimeView = substr($fullDateTime, 11, 5) . " " . substr($fullDateTime, 8, 2) . "." . substr($fullDateTime, 5, 2) . "." . substr($fullDateTime, 0, 4);

$datetimes = array();
$datetimes["start"] = $dateTimeStart;
$datetimes["end"] = $dateTimeNow;
$datetimes["view"] = $dateTimeView;

$jsonReturn = json_encode($datetimes);

echo($jsonReturn);
?>


