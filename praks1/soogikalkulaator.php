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

// testimiseks paneme erinevad väärtused paika
// ning kasutame selleks massiivi
// kujul (soodusKaart, kasOledOpilane)

// kui oled õpilane ning sul on sooduskaart
$opilane = array(true, true);

// kui oled õpetaja ning sul on sooduskaart
$opetaja = array(true, false);

// kui oled külastaja ilma sooduskaardita
$kulastaja = array(false, false);

// kui oled õpilane ning sul on sooduskaart
echo 'Hind õpilasele: '.round(soogiHind($soogiHind, $opilane[0], $opilane[1]), 2).' € <br />';

// kui oled õpetaja ning sul on sooduskaart
echo 'Hind opetajale: '.round(soogiHind($soogiHind, $opetaja[0], $opetaja[1]),2).' € <br />';

// kui oled külastaja ilma sooduskaardita
echo 'Hind külastajale: '.round(soogiHind($soogiHind, $kulastaja[0], $kulastaja[1]), 2).' € <br />';