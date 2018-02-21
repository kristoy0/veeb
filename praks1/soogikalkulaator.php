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

require_once 'funktsioonid.php'; // ligipääs funktsioonid.php failile

// väljastame html vormi
loeVormFailist('vorm.html');

// testimiseks paneme erinevad väärtused paika
// ning kasutame selleks massiivi
// kujul (soodusKaart, kasOledOpilane)

// Kasutajad on tabel
$kasutajad = array(
    array(
        'roll' => 'Õpilase',
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

$soogid = array(
    array(
        'nimetus' => 'Šnitsel',
        'kirjeldus' => 'Šnitsel sealihast, lisand, kaste, salat, leib',
        'hind' => 2.68
    ),
    array(
        'nimetus' => 'Seapraad',
        'kirjeldus' => 'Seapraad, lisand, kaste, salat, leib',
        'hind' => 2.65
    ),
    array(
        'nimetus' => 'Hakklihapallid tomatikastmes',
        'kirjeldus' => 'Hakklihapall 2 tk, lisand, kaste, salat, leib',
        'hind' => 2.30
    ),
    array(
        'nimetus' => 'Hakklihapallid tomatikastmes 1/2',
        'kirjeldus' => 'Hakklihapall, lisand, kaste, salat, leib',
        'hind' => 1.30
    ),
    array(
        'nimetus' => 'Kartul kastmega',
        'kirjeldus' => 'Kartul, kaste, salat, leib',
        'hind' => 1.28
    )
);

// kui roll pole veel vormis määratud, tuleks näidata
// külalise hindu
foreach ($soogid as $sook) {
    echo '<h3>Söögi nimetus: '.$sook['nimetus'].'</h3>';
    echo '<pre>'.$sook['kirjeldus'].'</pre><br>';
    foreach ($kasutajad as $kasutaja) {
// eelnevalt defineeritud funktsiooni kutsumine
        if (empty($_GET)) {
            $_GET['roll'] = 'Külastaja';
        }
        if ($_GET['roll'] == $kasutaja['roll']) {
            echo $kasutaja['roll'].' hind : '.round(soogiHind($sook['hind'], $kasutaja['soodus'], $kasutaja['opilaskaart']), 2).' € <br>';
        }
    }
    echo '<br>';
}

