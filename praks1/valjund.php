<?php
/**
 * Created by PhpStorm.
 * User: kristo.rood
 * Date: 30.01.2018
 * Time: 10:24
 */

// Teksti väljastamine
echo 'Aine - veebiprogrammeerimine'.'<br />';
print 'valikaine'.'<br />';

// Muutujate defineerimine
$eesNimi = 'Kristo'; // eesnimi, string
$pereNimi = 'R'; // perenimi, string
$bussiNumber = 4; //bussinumber, integer
$soiduKestvus = 0.5; // sõidu kestus, float

// Konstandi defineerimine
define('NUMBER_PI', 3.1415); //pi konstant

//Kasutades eelnevalt defineeritud muutujaid ja konstante
//väljastame teksti
echo 'Olen '.$eesNimi.' '.$pereNimi.' ning sõidan bussiga nr '.$bussiNumber;
echo ', linna jõuan '.$soiduKestvus.' tunniga'.'<br />';
echo 'Pi väärtus on '.NUMBER_PI.'<br />';