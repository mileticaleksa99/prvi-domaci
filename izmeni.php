<?php

$konekcija = require 'inicijalizacija.php';

$negativacIzmena = $_POST['negativacIzmena'];
$statusIzmena = $_POST['statusIzmena'];

$upit = "UPDATE negativac SET status_id = '$statusIzmena' WHERE id = '$negativacIzmena'";

$izmenjeno = $konekcija->izvrsiUpit($upit);
if ($izmenjeno) {
    header('Location: administracija.php?poruka=Uspesno ste izmenili status negativca!');
} else {
    header('Location: administracija.php?poruka=Neuspesno ste izmenili status negativca!');
}



