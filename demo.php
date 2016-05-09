<?php
require 'vendor/autoload.php';
require 'turingRobot.class.php';

$test = new TuringRobot('你的 API Key','你的 secret');

echo $test->say('你好');
