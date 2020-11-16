<?php

class Speedometer
{
    const KMTOMILE = 0.6215;
    const MILETOKM = 1.609;
    public static function convertKmToMiles($km): int
    {
        $miles = $km * self::KMTOMILE;
        return $miles;
    }
    public static function convertMilesToKm($mile): int
    {
        $km = $mile * self::MILETOKM;
        return $km;
    }

}