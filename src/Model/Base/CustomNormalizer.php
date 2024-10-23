<?php
/*
 * This code was auto generated by AfterShip SDK Generator.
 * Do not edit the class manually.
 */
namespace Tracking\Model\Base;

use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class CustomNormalizer extends ObjectNormalizer
{
    public function normalize($object, $format = null, array $context = [])
    {
        $object = parent::normalize($object, $format, $context);

        return array_filter($object, function ($value) {
            return $value !== null;
        });
    }
}