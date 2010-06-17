<?php

$serial = "xxxxxxxxxxxx";
$token = "xxxxxxxxx";
$nab = new Nabaztag($serial, $token);
var_dump($nab->getLastMessage());
var_dump($nab->getSerial());
var_dump($nab->getToken());
var_dump($nab->tts("test"));
var_dump($nab->getLastMessage());
var_dump($nab->getToken());
var_dump($nab->tts("test"));
var_dump($nab->getLastMessage());
