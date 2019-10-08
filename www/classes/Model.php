<?php
require_once __DIR__ . '/../classes/Database.php';

abstract class Model
{
    public $table;

    public function all()
    {
        $database = new Database();
        $connection = $database->connection;
        $rows = [];
        $sql = "SELECT * FROM " . $this->table;
        $result = $connection->query($sql);
        while ($row = $result->fetch_row()) {
            $rows[] = $row;
        }
        $result->close();

        return $rows;
    }

}
