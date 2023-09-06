<?php

$konekcija = require 'inicijalizacija.php';

$negativacBrisanje = $_POST['negativacBrisanje'];

$upit = "DELETE FROM negativac WHERE id = '$negativacBrisanje'";
$obrisano = $konekcija->izvrsiUpit($upit);

if ($obrisano) {
    header('Location: administracija.php?poruka=Uspesno ste obrisali negativca!');
} else {
    header('Location: administracija.php?poruka=Neuspesno ste obrisali negativca!');
}

