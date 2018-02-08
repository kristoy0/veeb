<?php
/**
 * Created by PhpStorm.
 * User: kristo.rood
 * Date: 8.02.2018
 * Time: 12:45
 */

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
    if ($soodusHind < 0) {
        return 0;
    }
    return $soodusHind;
} // funktsiooni lõpp