<?php

class Speedometer
{
    const MULTIPLICATOR = 1.60934;

    public static function convertKmToMiles(int $value)
    {
        return round(($value / self::MULTIPLICATOR), 2);

    }

    public static function convertMilesToKm(int $value)
    {
        return round(($value * self::MULTIPLICATOR), 2);

    }
}