<?php
/**
 * Created by PhpStorm.
 * User: kristo.rood
 * Date: 30.01.2018
 * Time: 11:28
 */

// Seadistame vajalikud muutujad
$soogiHind = 2.55; // söögi hind eurodes
$soodustusProtsent = 15; // soodustusprotsent
$toetus = 1.80; // õpilase toetus eurodes

// Söögi lõpphind kalkuleeritakse kui kõik eelnevalt defineeritud
// muutujad on suuremad kui null
if ($soogiHind > 0 and $soodustusProtsent > 0 and $toetus > 0) {
    $loppHind = $soogiHind - ($soogiHind * ($soodustusProtsent / 100)) - $toetus;
    echo 'Söögi lõpphind õpilasele: '.$loppHind.'<br />';
} else {
    echo 'Andmed pole täielikud';
}