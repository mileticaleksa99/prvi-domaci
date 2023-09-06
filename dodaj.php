<?php

$konekcija = require 'inicijalizacija.php';

$ime = $_POST['ime'];
$opis = $_POST['opis'];
$level_id = $_POST['level'];
$status_id = $_POST['status'];
$slika = basename($_FILES["slika"]["name"]);

$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["slika"]["name"]);

if (move_uploaded_file($_FILES["slika"]["tmp_name"], $target_file)) {
    $konekcija->izvrsiUpit("INSERT INTO negativac (ime, opis, level_id, status_id, slika) VALUES ('$ime', '$opis', '$level_id', '$status_id', '$slika')");
    header('Location: administracija.php?poruka=Uspesno ste dodali negativca!');
} else {
    header('Location: administracija.php?poruka=Neuspesno ste dodali negativca!');
}