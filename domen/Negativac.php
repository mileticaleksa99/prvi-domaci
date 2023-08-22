<?php

class Negativac implements JsonSerializable {
    private $id;
    private $ime;
    private $opis;
    private $status;
    private $level;
    private $slika;

    public function __construct($id, $ime, $opis, $status, $level, $slika) {
        $this->id = $id;
        $this->ime = $ime;
        $this->opis = $opis;
        $this->status = $status;
        $this->level = $level;
        $this->slika = $slika;
    }

    public function getId() {
        return $this->id;
    }

    public function getIme() {
        return $this->ime;
    }

    public function getOpis() {
        return $this->opis;
    }

    public function getStatus() {
        return $this->status;
    }

    public function getLevel() {
        return $this->level;
    }

    public function getSlika() {
        return $this->slika;
    }

    public function jsonSerialize(): array {
        return [
            'id' => $this->id,
            'ime' => $this->ime,
            'opis' => $this->opis,
            'status' => $this->status,
            'level' => $this->level,
            'slika' => $this->slika
        ];
    }

    public static function toEntity($row) {
        $status = Status::toEntity($row);
        $level = Level::toEntity($row);
        return new self($row['negativac_id'], $row['ime'], $row['opis'], $status, $level, $row['slika']);
    }
}

