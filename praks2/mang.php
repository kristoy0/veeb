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