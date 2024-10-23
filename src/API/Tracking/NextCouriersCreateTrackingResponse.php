<?php
/*
 * This code was auto generated by AfterShip SDK Generator.
 * Do not edit the class manually.
 */
namespace Tracking\API\Tracking;

use Tracking\Model\Base\Base;

class NextCouriersCreateTrackingResponse extends Base
{
    /**
     * @var string Unique code of courier. Get courier 
     */
    public $slug;
    /**
     * @var string Tracking number.
     */
    public $tracking_number;
    /**
     * @var string|null|string Source of next couriers.
     */
    public $source;
    /**
     * @var string|null The field contains the official tracking URL of the next courier, if available. The language parameter of this link is determined by the destination country/region and the language associated with the shipment. If the data related to the destination country/region and the shipment's language is unavailable, AfterShip will default the language parameter of the link to "US".
     */
    public $courier_tracking_link;
    /**
     * @var string|null The field provides the link for modifying delivery instructions (such as delivery date and shipping address) if supported by the next carrier. The language parameter of this link is determined by the destination country/region and the language associated with the shipment. If the data related to the destination country/region and the shipment's language is unavailable, AfterShip will default the language parameter of the link to "US".
     */
    public $courier_redirect_link;
}
