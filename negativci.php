<?php

$konekcija = require 'inicijalizacija.php';

$upit = "SELECT *, n.id as negativac_id FROM negativac n JOIN status s ON n.status_id = s.id JOIN level l ON n.level_id = l.id";

$podaci = $konekcija->izvrsiUpit($upit);

$negativci = [];

foreach ($podaci as $podatak) {
    $negativac = Negativac::toEntity($podatak);
    $negativci[] = $negativac;
}

echo json_encode($negativci);