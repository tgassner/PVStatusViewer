<?php

$homeAssistantBearerToken = file_get_contents("homeAssistantBearerToken.txt");

$urlHomeAssistantStates = "http://172.31.31.10:8123/api/states";

$opts = [
    "http" => [
        "method" => "GET",
        "header" => "Accept-language: en\r\n" .
            "Content-Type: application/json\r\n" .
            "Authorization: Bearer " . $homeAssistantBearerToken . "\r\n" .
            "User-Agent: PVStatusViewer\r\n"
    ]
];

$shutterStates = array("open" => "offen", "closed" => "geschlossen", "opening" => "Öffnend", "closing" => "schließend");

$timerToShutter = array("timer.timerfensterschlieszenverarbeitung" => "cover.lichtkuppelverarbeitung",
                    "timer.timerfensterschlieszenkueche" => "cover.lichtkuppelkueche",
                    "timer.timerfensterschlieszenlaermraum" => "cover.lichtkuppellaermraum",
                    "timer.timerfensterschlieszenzuschnitt" => "cover.lichtkuppelzuschnitt",
                    "timer.timerfensterschlieszenhalle" => "cover.kippfensterhalle",
                    "timer.timerfensterschlieszenkleberaum" => "cover.kippfensterkleberaum");

$context = stream_context_create($opts);

$jsonStringStates = file_get_contents($urlHomeAssistantStates, false, $context);

$states = json_decode($jsonStringStates);

$shutters = array();
$timers = array();


foreach ($states as $state) {
    $entity_id = $state->entity_id;
    $statestate = $state->state;

    if (str_starts_with($entity_id, "cover.")) {
        $attributes = $state->attributes;
        $device_class = $attributes->device_class;
        if ($device_class == "shutter") {
            $friendly_name = $attributes->friendly_name;
            $shutter = array();
            $shutter["entity_id"] = $entity_id;
            $shutter["state"] = $shutterStates[$statestate];
            $shutter["name"] = $friendly_name;
            $shutter["timerActive"] = false;
            $shutters[$entity_id] = $shutter;
        }
    }

    if (str_starts_with($entity_id, "timer.")) {
        if ($statestate == "active") {
            $finishes_at = $state->attributes->finishes_at;
            $finishingAtUnixTimeStamp = strtotime($finishes_at);
            $NowUnixTimeStamp = strtotime("now");
            $delta = $finishingAtUnixTimeStamp - $NowUnixTimeStamp;
            $timeToClose =
                sprintf('%02d', intval($delta /(60*60)))
                . ":" .
                sprintf('%02d',(($delta /60)%60))
                . ":" .
                sprintf('%02d',($delta % 60));
            $timer = array();
            $shutter["entity_id"] = $entity_id;
            $timer["timeToClose"] = $timeToClose;
            $timers[$entity_id] = $timer;
        }
    }
}

foreach ($timers as $timer_entity_id => $timer) {
    $shutter_entity_id = $timerToShutter[$timer_entity_id];
    $shutter = $shutters[$shutter_entity_id];
    $shutter["timerActive"] = true;
    $shutter["timeToClose"] = $timer["timeToClose"];
    $shutters[$shutter_entity_id] = $shutter;
}

//print_r($shutters);
//print_r($timers);

$jsonReturn = json_encode($shutters);
echo($jsonReturn);
?>


