<?php
require_once __DIR__ . '/../classes/Database.php';

abstract class Model
{
    public static $table;

    public static function all()
    {
        $table = static::$table;
        $sql = "SELECT * FROM `{$table}`";
        $database = new Database();

        return $database->query($sql);

    }

    public static function create($data)
    {
        $dataToInsert = [];
        $cols = array_keys($data); // названия столбцов
        foreach ($cols as $col) {
            $dataToInsert[':' . $col] = $data[$col];
        }
        $sql = 'INSERT INTO ' . static::$table . '(' . implode(', ', $cols) . ') VALUES (' . implode(', ', array_keys($dataToInsert)) . ')';
        $db = new Database();

        return $db->query($sql, $dataToInsert);
    }

    public function update($id, $data)
    {
        $cols = array_keys($data); // названия столбцов
        $dataToUpdate = [':id' => $id];
        $dataV = [];
        foreach ($cols as $col) {
            $dataToUpdate[':' . $col] = $data[$col];
            $dataV[$col] = $col . '=:' . $col;
        }
        $sql = 'UPDATE ' . static::$table . ' SET ' . implode(', ', $dataV) . ' WHERE id=:id';
        $db = new Database();

        return $db->query($sql, $dataToUpdate);
    }


    public function delete($id)
    {
        $table = static::$table;

        $sql = "DELETE FROM `{$table}` WHERE `id` = {$id}";
        $database = new Database();

        return $database->query($sql);

    }

    public static function find($id)
    {
        $table = static::$table;
        $sql = "SELECT * FROM `{$table}` WHERE `id` = {$id}";
        $database = new Database();

        $result = $database->query($sql);

        return $result[0];
    }
}
