<?php
/*
 * This code was auto generated by AfterShip SDK Generator.
 * Do not edit the class manually.
 */
namespace Tracking\Model;

use Tracking\Model\Base\Base;

class CourierEstimatedDeliveryDateTracking extends Base
{
    /**
     * @var string|null The estimated arrival date of the shipment. It reflects the shipment recipient’s timezone and the format may vary based on how the carrier provides it:- YYYY-MM-DD- YYYY-MM-DDTHH:mm:ss- YYYY-MM-DDTHH:mm:ssZ
     */
    public $estimated_delivery_date;
    /**
     * @var string|null The earliest estimated delivery date of the shipment. It reflects the shipment recipient’s timezone and the format may vary based on how the carrier provides it:- YYYY-MM-DD- YYYY-MM-DDTHH:mm:ss- YYYY-MM-DDTHH:mm:ssZ
     */
    public $estimated_delivery_date_min;
    /**
     * @var string|null The Latest estimated delivery date of the shipment. It reflects the shipment recipient’s timezone and the format may vary based on how the carrier provides it:- YYYY-MM-DD- YYYY-MM-DDTHH:mm:ss- YYYY-MM-DDTHH:mm:ssZ
     */
    public $estimated_delivery_date_max;
}
