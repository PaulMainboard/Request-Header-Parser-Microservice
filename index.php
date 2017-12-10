<?php

// Print HTTP header information and other info that the server collected ** For Testing Purposes **
foreach ($_SERVER as $key => $value) {
    echo $key . " : " . $value . "<br>";
}

// Find the languange of the browser.
echo "<br>" . substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, strpos($_SERVER['HTTP_ACCEPT_LANGUAGE'], ","));

// Find the OS of the guest computer.
preg_match("/\(([^)]+)\)/", $_SERVER['HTTP_USER_AGENT'], $os);
echo "<br>" . 
    $os[1];

echo "<br>" . $_SERVER['REMOTE_ADDR'];