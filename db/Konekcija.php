<?php

class Konekcija {
    private $host;
    private $username;
    private $password;
    private $dbname;
    private $konekcija;

    public function __construct($host, $username, $password, $dbname) {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;

        $this->konekcija = new mysqli($this->host, $this->username, $this->password, $this->dbname);

        if ($this->konekcija->connect_error) {
            die("Connection failed: " . $this->konekcija->connect_error);
        }
    }

    public function unesi($tabela, $podaci) {
        $kolone = implode(', ', array_keys($podaci));
        $vrednosti = "'" . implode("', '", $podaci) . "'";

        $sql = "INSERT INTO $tabela ($kolone) VALUES ($vrednosti)";

        if ($this->konekcija->query($sql) === TRUE) {
            return $this->konekcija->insert_id;
        } else {
            return false;
        }
    }

    public function select($tabela, $uslov = '') {
        $sql = "SELECT * FROM $tabela";

        if ($uslov !== '') {
            $sql .= " WHERE $uslov";
        }

        $result = $this->konekcija->query($sql);

        if ($result->num_rows > 0) {
            $data = [];
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else {
            return [];
        }
    }

    public function azuriraj($tabela, $podaci, $uslov) {
        $set = implode(', ', array_map(function ($key, $value) {
            return "$key = '$value'";
        }, array_keys($podaci), $podaci));

        $sql = "UPDATE $tabela SET $set WHERE $uslov";

        if ($this->konekcija->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function obrisi($tabela, $uslov) {
        $sql = "DELETE FROM $tabela WHERE $uslov";

        if ($this->konekcija->query($sql) === TRUE) {
            return true;
        } else {
            return false;
        }
    }

    public function izvrsiUpit($sql) {
        $result = $this->konekcija->query($sql);
        if ($result === TRUE) {
            return true;
        } elseif ($result === FALSE) {
            return false;
        } else {
            $data = [];
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    }
}
