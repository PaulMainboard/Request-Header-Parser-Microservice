<?php

// Print HTTP header information and other info that the server collected ** For Testing Purposes **
//foreach ($_SERVER as $key => $value) {
//    echo $key . " : " . $value . "<br>";
//}

// Get IP address of guest device
$headerObj->ipAddress = $_SERVER['REMOTE_ADDR'];

// Get the language of the browser of the device
$fullLangaugeText = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$language =  substr($fullLanguageText, 0, strpos($fullLanguageText, ","));
$headerObj->language = $language;

// Get the OS name of the guest computer.
preg_match("/\(([^)]+)\)/", $_SERVER['HTTP_USER_AGENT'], $os);
$headerObj->software = $os[1];

// Make a JSON object
$headerJSON = json_encode($headerObj);

echo $headerJSON;
