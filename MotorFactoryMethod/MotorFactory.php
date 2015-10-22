<?php
/**
 * Created by PhpStorm.
 * User: roberto
 * Date: 22/10/15
 * Time: 02:11 AM
 */

/*
 * Factory method who search for the right Motor to load
 *
 * @method startEngine
 * @param string $index The index is the random letter (A-Z)
 * @param string $manufacturer The Motor manufacturer, is not used on this moment
 *
 * @return Return the right instance of the class Motor if it exists if not, it returns 0
 *
 * @todo Change this by an autoloader
 */
require_once('MotorFactoryMethod/MotorA.php');
require_once('MotorFactoryMethod/MotorB.php');
require_once('MotorFactoryMethod/MotorC.php');

class MotorFactory {

    public static function startEngine($index = '', $manufacturer = '')
    {
        if ($index == '') {
            throw new Exception('This motor kind doesnt exists');
        } else {
            $motor = 'Motor' . ucfirst($index);

            if (class_exists($motor)) {
                return new $motor($index, $manufacturer);
            } else {
                return 0;
                //throw new Exception('Motor Class not found');
            }
        }
    }
} 