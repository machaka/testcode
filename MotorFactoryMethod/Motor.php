<?php
/**
 * Created by PhpStorm.
 * User: roberto
 * Date: 22/10/15
 * Time: 02:13 AM
 */

/*
 * Class to define the basic structure of the Motor
 *
 * @param string $type The kind of Motor to load
 * @param string $manufacturer The Motor manufacturer, is not used on this moment
 *
 * @todo Change this by an autoloader
 */

abstract class Motor
{
    protected $_type = NULL;

    protected $_manufacturer = NULL;

    public function __construct($type, $manufacturer)
    {
        $this->_type = $type;
        $this->_manufacturer = $manufacturer;
    }

 /**
  * @method getInfo
 * Shows the Motor Info
 * @return string The info like the type and manufacturer
 */

    public function getInfo()
    {
       return 'This motor is type: ' . $this->_type . ' and it was manufactured by ' . $this->_manufacturer;
    }

} 