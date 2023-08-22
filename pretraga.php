<?php
/** @var Konekcija $konekcija */
$konekcija = require 'inicijalizacija.php';

$pretraga = $_GET['pretraga'];

$upit = "SELECT *, n.id as negativac_id FROM negativac n JOIN status s ON n.status_id = s.id JOIN level l ON n.level_id = l.id WHERE n.ime LIKE '%$pretraga%' OR l.nivo LIKE '%$pretraga%' OR s.status LIKE '%$pretraga%'";

$podaci = $konekcija->izvrsiUpit($upit);

$negativci = [];

foreach ($podaci as $podatak) {
    $negativac = Negativac::toEntity($podatak);
    $negativci[] = $negativac;
}

echo json_encode($negativci);