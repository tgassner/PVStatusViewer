<?php
$urlStatusWetter = "http://172.31.31.51/rpc/Shelly.GetStatus";

$jsonStringStatusWetter = file_get_contents($urlStatusWetter);

$jsonStatusWetter = json_decode($jsonStringStatusWetter);

$regen = $jsonStatusWetter->{'input:0'}->state;
$wind  = $jsonStatusWetter->{'input:1'}->state;

$ret = array();
$ret["regen"] = $regen;
$ret["wind"] = $wind;

$jsonReturn = json_encode($ret);

echo($jsonReturn);
?>