<?php
/*
 * This code was auto generated by AfterShip SDK Generator.
 * Do not edit the class manually.
 */
namespace Tracking\API\Tracking;

use Tracking\Model\Base\Base;

class MarkTrackingCompletedByIdRequest extends Base
{
    /**
     * @var string|null|string One of `DELIVERED`, `LOST` or `RETURNED_TO_SENDER`.- Mark the tracking as completed with `DELIVERED`. The tag of the tracking will be updated to `Delivered` and the subtag will be updated to `Delivered_001`.- Mark the tracking as completed with `LOST`. The tag of the tracking will be updated to `Exception` and the subtag will be updated to `Exception_013`.- Mark the tracking as completed with `RETURNED_TO_SENDER`. The tag of the tracking will be updated to `Exception` and the subtag will be updated to `Exception_011`.
     */
    public $reason;
}