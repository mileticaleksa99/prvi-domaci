<?php

require 'db/Konekcija.php';
require 'domen/Level.php';
require 'domen/Status.php';
require 'domen/Negativac.php';

$konekcija = new Konekcija('localhost', 'root', '', 'betmen');

return $konekcija;