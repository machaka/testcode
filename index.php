<?php
/**
 * Created by PhpStorm.
 * User: roberto
 * Date: 22/10/15
 * Time: 12:23 AM
 */


require_once('MotorFactoryMethod/MotorFactory.php');

$index = chr(rand(65, 90));

$motor = MotorFactory::startEngine($index, 'General Motors');

$speed = (is_object($motor)) ? $motor->calculateSpeed() : 0;

echo "The Motor" . $index . " has an speed of " . $speed . " Km/h";

