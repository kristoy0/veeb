<?php
/**
 * Created by PhpStorm.
 * User: kristo.rood
 * Date: 14.02.2018
 * Time: 12:31
 */

require_once '../praks1/funktsioonid.php'; // ligipääs funktsioonid.php failile

$suvalineNumber = 10;
$pakutudNumber = $_POST['number'];

loeVormFailist('manguvorm.html');

if (!empty($pakutudNumber)) {
    switch ($pakutudNumber) {
        case $suvalineNumber:
            echo "Pakkusid õige numbri";
            break;
        case ($pakutudNumber >= $suvalineNumber - 5 and $pakutudNumber < $suvalineNumber):
            echo 'Pakkusid lähedale (>= -5)';
            break;
        case ($pakutudNumber <= $suvalineNumber + 5 and $pakutudNumber > $suvalineNumber):
            echo 'Pakkusid lähedale (<= +5)';
            break;
        case ($pakutudNumber < $suvalineNumber):
            echo 'Pakkusid liiga vähe';
            break;
        case ($pakutudNumber > $suvalineNumber):
            echo 'Pakkusid liiga palju';
            break;
    }
}