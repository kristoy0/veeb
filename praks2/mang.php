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

$suvalineNumber = $_POST['suvalineNumber'];
$suvalineNumber = isset($suvalineNumber) ? $suvalineNumber : rand(1, 50);

$pakutudNumber = $_POST['number'];

$katseteArv = $_POST['katseteArv'];
$katseteArv = isset($katseteArv) ? ++$katseteArv : 0;

echo '<form action="mang.php" method="post">
    Sisesta number 1 - 50:<br>
    <input type="number" max="50" min="1" name="number" value="">
    <input type="hidden" name="katseteArv" value="'.$katseteArv.'">
    <input type="hidden" name="suvalineNumber" value="'.$suvalineNumber.'">
    <input type="submit" value="Arva">
</form>';

if (!empty($pakutudNumber)) {
    switch ($pakutudNumber) {
        case $suvalineNumber:
            echo 'Pakkusid õige numbri <br>';
            echo 'Sul läks arvamiseks '.$katseteArv.' katset';
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