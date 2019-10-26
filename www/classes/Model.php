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
        $sql = "SELECT * FROM " . $this->table;

        return $this->database->query($sql);
    }

    public function create($data)
    {
        $sql = "INSERT INTO " . $this->table . "(name, published)
        VALUES ('" . $data['name'] . "', " . $data['published'] . ")";

        return $this->database->query($sql);
    }

    public function update($id, $data)
    {
        $set = '';
        $x = 1;

        foreach ($data as $name => $value) {
            $set .= "{$name} = \"{$value}\"";
            if ($x < count($data)) {
                $set .= ',';
            }
            $x++;
        }

        $sql = "UPDATE {$data} SET {$set} WHERE id = {$id}";

        if (!$this->query($sql, $data)->error()) {
            return true;
        }

        return false;
    }

    public function delete($id)
    {
        $sql = "DELETE FROM " . $this->table . " WHERE id = {$id}";

        return $this->database->query($sql);

    }

    public function find($id)
    {
        $sql = "SELECT * FROM " . $this->table . " WHERE `id`='" . $id . "'";

        return $this->database->query($sql);
    }
}
