<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$base64="RkxBR3t0aGlzX2lzX2xpZmVfYnV0dGVyX3RoYW5fY3VyaXNlfQ==";
echo strlen($base64);
for($I=0;$I<strlen($base64);$I++){

    $myfile = fopen("log" . $I, "w+");
    $txt = $base64[$I];
    fwrite($myfile, $txt);
}


?>