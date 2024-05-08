<?php
$ablakcim = array(
    'cim' => 'Ponyvaverzum',
);

$fejlec = array(
    'kepforras' => '',
    'kepalt' => '',
	'cim' => '',
	'motto' => ''
);

$lablec = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'ceg' => 'Ponyvaverzum.'
);

$oldalak = array(
    '/' => array('fajl' => 'fooldal', 'szoveg' => 'Főoldal', 'menun' => array(1,1)),
    'konyvek' => array('fajl' => 'konyvek','szoveg' => 'Könyvek','menun' => array(1,1)),
    'velemenyek' => array('fajl' => 'velemenyek','szoveg' => 'Vélemények', 'menun' => array(1,1)),
    'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1,1)),
    'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés', 'menun' => array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0))
);

$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');
?>
<?php
    $MAPPA = './kepek/';
    $TIPUSOK = array ('.jpg', '.png');
    $MEDIATIPUSOK = array('image/jpeg', 'image/png');
    $DATUMFORMA = "Y.m.d. H:i";
    $MAXMERET = 500*1024;
    $vegsohely = './kepek/';
?>