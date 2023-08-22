<?php

$konekcija = require 'inicijalizacija.php';

$upit = "SELECT * FROM level";

$podaci = $konekcija->izvrsiUpit($upit);

$leveli = [];

foreach ($podaci as $podatak) {
    $level = Level::toEntity($podatak);
    $leveli[] = $level;
}
echo json_encode($leveli);