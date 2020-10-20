<?php

require_once __DIR__ . '/../vendor/autoload.php';

use \App\Wcs\Hello;

$message = new Hello;
echo $message->Talk();

