<?php

class Status implements JsonSerializable {
    private $id;
    private $status;

    public function __construct($id, $status) {
        $this->id = $id;
        $this->status = $status;
    }

    public function getId() {
        return $this->id;
    }

    public function getStatus() {
        return $this->status;
    }

    public function jsonSerialize(): array {
        return [
            'id' => $this->id,
            'status' => $this->status
        ];
    }

    public static function toEntity($row) {
        return new self($row['id'], $row['status']);
    }
}
