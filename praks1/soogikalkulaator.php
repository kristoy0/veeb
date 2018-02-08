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

// Kasutajad on tabel
$kasutajad = array(
    array(
        'roll' => 'Õpilane',
        'soodus' => true,
        'opilaskaart' => true
    ),
    array(
        'roll' => 'Õpetaja',
        'soodus' => true,
        'opilaskaart' => false
    ),
    array(
        'roll' => 'Külastaja',
        'soodus' => false,
        'opilaskaart' => false
    )
);

foreach ($kasutajad as $kasutaja) {
    echo $kasutaja['roll'].' hind : '.round(soogiHind($soogiHind, $kasutaja['soodus'], $kasutaja['opilaskaart']), 2).' € <br />';
}