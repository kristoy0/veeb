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

session_start();


if(!isset($_SESSION['suvalineNumber']) and !isset($_SESSION['katseteArv'])){
    $_SESSION['suvalineNumber'] = rand(1, 50);
    $_SESSION['katseteArv'] = 0;
} else {
    $suvalineNumber = $_SESSION['suvalineNumber'];
    $katseteArv = ++$_SESSION['katseteArv'];
}

$pakutudNumber = $_POST['number'];

echo '<pre>'.print_r($_SESSION).'</pre>';

echo '<form action="mang.php" method="post">
    Sisesta number 1 - 50:<br>
    <input type="number" max="50" min="1" name="number" value="">
    <input type="submit" name="submit" value="Arva">
</form>';

if (!empty($pakutudNumber)) {
    switch ($pakutudNumber) {
        case $suvalineNumber:
            echo 'Pakkusid õige numbri <br>';
            echo 'Sul läks arvamiseks '.$katseteArv.' katset';
            unset($_SESSION['katseteArv']);
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