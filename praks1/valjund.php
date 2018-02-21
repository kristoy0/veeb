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

// Kasutades eelnevalt defineeritud muutujaid ja konstante
// väljastame teksti
echo 'Olen '.$eesNimi.' '.$pereNimi.' ning sõidan bussiga nr '.$bussiNumber;
echo ', linna jõuan '.$soiduKestvus.' tunniga'.'<br />';
echo 'Pi väärtus on '.NUMBER_PI.'<br />';

// Tingimuslaused
$ilmValjas = 'lund sajab';

// Kui lund sajab siis tuleb minna sauna
if($ilmValjas == 'lund sajab') {
    echo 'Tuleb minna sauna'.'<br />';;
// Kui lund ei saja siis pole mõtet sauna minna
} else {
    echo 'Pole mõtet sauna minna'.'<br />';
}
// Väärtuse overloadimine teise tulemuse saavutamiseks
$ilmValjas = 'lund ei saja'.'<br />';

// Kui lund sajab siis tuleb minna sauna, kui mitte siis pole mõtet sauna minna
echo ($ilmValjas == 'lund sajab' ? 'Tuleb minna sauna' : 'Pole mõtet sauna minna'.'<br />');