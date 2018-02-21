<?php
/*
 * WARNING: The code that follows may make you cry:
 *           A Safety Pig has been provided below for your benefit
 *                              _
 *      _._ _..._ .-',     _.._(`))
 *     '-. `     '  /-._.-'    ',/
 *       )         \            '.
 *      / _    _    |             \
 *     |  a    a    /              |
 *      \   .-.                     ;
 *       '-('' ).-'       ,'       ;
 *          '-;           |      .'
 *            \           \    /
 *            | 7  .__  _.-\   \
 *            | |  |  ``/  /`  /
 *           /,_|  |   /,_/   /
 *              /,_/      '`-'
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

// funktsioon vormi väljastamiseks
// vormi hoiame vorm.html failis
// vormi sisu loetakse failist ning väljastatakse
function loeVormFailist ($failiNimi) {
    // kontrollime etteantud faili
    // kui tingimused(fail olemas, on fail, ning on loetav) täidetud, siis saab failist lugeda
    $sisu = '';
    if (file_exists($failiNimi) and is_file($failiNimi) and is_readable($failiNimi)) {
        // avame faili
        $fp = fopen($failiNimi, 'r');
        // loeme faili sisu
        $sisu = fread($fp, filesize($failiNimi));
        // sulgeme ühenduse failiga
        fclose($fp);
    } else {
        echo 'Probleem failiga: '.$failiNimi;
        exit;
    }
    echo $sisu;
}