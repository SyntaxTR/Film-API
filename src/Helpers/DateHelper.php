<?php
namespace Mucahittopcu\Filmapi\Helpers;

use DateTime;

class DateHelper
{
    public static function parse($dateString, $format = 'Y')
    {
        try {
            $dateTime = new DateTime($dateString);
            return $dateTime->format($format);
        } catch (\Exception $e) {
            return null;
        }
    }
}