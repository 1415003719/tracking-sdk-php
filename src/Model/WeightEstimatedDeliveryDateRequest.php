<?php
/*
 * This code was auto generated by AfterShip SDK Generator.
 * Do not edit the class manually.
 */
namespace Tracking\Model;

use Tracking\Model\Base\Base;

class WeightEstimatedDeliveryDateRequest extends Base
{
    /**
     * @var string The weight unit of the package. 
     */
    public $unit;
    /**
     * @var int|float The weight of the shipment.
     */
    public $value;
}
