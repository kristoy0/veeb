<?php
/**
 * Created by PhpStorm.
 * User: kristo.rood
 * Date: 30.01.2018
 * Time: 11:28
 */

// Seadistame vajalikud muutujad
$soogiHind = 2.65; // söögi hind eurodes

// funktisoon soodustuse arvutamiseks
/**
 * @param $taisHind
 * @param $soodusKaart
 * @param $kasOledOpilane
 */
function soogiHind ($taisHind, $soodusKaart = false, $kasOledOpilane = false) {
    // funktsiooni sisu
    $toetus = 1.80; // õpilase toetus eurodes
    $soodustusProtsent = 15; // soodustusprotsent
    $soodusHind = $taisHind;

    if ($soodusKaart) {
        $soodusHind = $taisHind - ($taisHind * ($soodustusProtsent / 100));
    }
    if ($kasOledOpilane) {
        $soodusHind -= $toetus;
    }
    return $soodusHind;
} // funktsiooni lõpp

// eelnevalt defineeritud funktsiooni kutsumine

// kui oled õpilane ning sul on sooduskaart
echo 'Hind õpilasele: '.round(soogiHind($soogiHind, true, true), 2).' € <br />';

// kui oled õpetaja ning sul on sooduskaart
echo 'Hind opetajale: '.round(soogiHind($soogiHind, true),2).' € <br />';

// kui oled külastaja ilma sooduskaardita
echo 'Hind külastajale: '.round(soogiHind($soogiHind), 2).' € <br />';