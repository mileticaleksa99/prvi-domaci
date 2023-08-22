<?php

$konekcija = require 'inicijalizacija.php';

$upit = "SELECT * FROM status";

$podaci = $konekcija->izvrsiUpit($upit);

$statusi = [];

foreach ($podaci as $podatak) {
    $status = Status::toEntity($podatak);
    $statusi[] = $status;
}
echo json_encode($statusi);
