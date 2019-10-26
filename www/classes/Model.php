<?php
require_once __DIR__ . '/../classes/Database.php';

abstract class Model
{
    public $table;
    public $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function all()
    {
        $sql = "SELECT * FROM `{$this->table}`";

        return $this->database->query($sql);
    }

    public function create($data)
    {
        $columnsArray = [];
        $valuesArray = [];

        foreach ($data as $key => $value) {
            $columnsArray[] = "`{$key}`";

            if (is_string($value)) {
                $valuesArray[] = "'{$value}'";
            } else {
                $valuesArray[] = "{$value}";
            }
        }

        $columnsString = implode(', ', $columnsArray);
        $valuesString = implode(', ', $valuesArray);

        $sql = "INSERT INTO `{$this->table}` ({$columnsString}) VALUES ({$valuesString})";

        return $this->database->query($sql);
    }

    public function update($id, $data)
    {
        $updateArray = [];

        foreach ($data as $key => $value) {
            if (is_string($value)) {
                $updateArray[] = "`{$key}` = '{$value}'";
            } else {
                $updateArray[] = "`{$key}` = {$value}";
            }
        }

        $updateString = implode(', ', $updateArray);

        $sql = "UPDATE `{$this->table}` SET {$updateString} WHERE `id` = {$id}";

        return $this->database->query($sql);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `{$this->table}` WHERE `id` = {$id}";

        return $this->database->query($sql);

    }

    public function find($id)
    {
        $sql = "SELECT * FROM `{$this->table}` WHERE `id` = {$id}";

        $result = $this->database->query($sql);

        return $result[0];
    }
}
