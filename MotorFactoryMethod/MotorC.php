<?php
/**
 * Created by PhpStorm.
 * User: roberto
 * Date: 22/10/15
 * Time: 02:19 AM
 */

/**
 * @method calculateSpeed() Calculates and return the right speed according to the motor type
 *
 * @return int Speed of the motor
 */
require_once('Motor.php');

class MotorC extends Motor
{

    public function calculateSpeed()
    {
        return ord($this->_type) * 30;
    }

} 