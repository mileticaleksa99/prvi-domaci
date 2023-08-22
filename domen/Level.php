<?php


class Level implements JsonSerializable {
    private $id;
    private $nivo;

    public function __construct($id, $nivo) {
        $this->id = $id;
        $this->nivo = $nivo;
    }

    public function getId() {
        return $this->id;
    }

    public function getNivo() {
        return $this->nivo;
    }

    public function jsonSerialize(): array {
        return [
            'id' => $this->id,
            'nivo' => $this->nivo
        ];
    }

    public static function toEntity($row) {
        return new self($row['id'], $row['nivo']);
    }
}
