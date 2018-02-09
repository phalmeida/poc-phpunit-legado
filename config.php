<?php

header('Content-Type: text/html; charset=utf-8');

require 'vendor/autoload.php';

// Load a single file
$conf = \Noodlehaus\Config::load('../config.ini');

var_dump($conf);