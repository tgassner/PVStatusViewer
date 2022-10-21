<?php
$apiKey = file_get_contents("api-key.txt");
$siteId = file_get_contents("site-id.txt");
$url = "https://monitoringapi.solaredge.com/site/" . $siteId . "/currentPowerFlow?api_key=" . $apiKey;

error_reporting(0);

$content = file_get_contents($url);

if($content === FALSE) { // handle error here...
    $ret = array();
    $ret["HTTPStatusCode"] = determineHTTPStatusCode();
    $ret["message"] = error_get_last()['message'];
    $ret["error"] = true;
    $json = json_encode($ret);
    echo($json);
} else {
    echo($content);
}

function determineHTTPStatusCode() {
    $message = error_get_last()['message'];
    $pos1 = strrpos($message, "HTTP");
    if ($pos1 !== false) {
        $sub1 = substr($message, $pos1);
        $pos2 = strpos($sub1, " ");
        if ($pos2 !== false) {
            return substr($sub1, $pos2 + 1, 3);
        }
    }
}

?>