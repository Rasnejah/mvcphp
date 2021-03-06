<?php
namespace app\models;


class Conection
{
    private $dbName = 'mysql:host=' . DB_SERVER . ';dbname=' . DATABASE;
    private $user = DB_USER;
    private $pass = DB_PASS;
    protected function connect()
    {
        try {
            $conn = new \PDO($this->dbName, $this->user, $this->pass);
            $conn->exec("set names utf8");
            return $conn;
        } catch (\Throwable $error) {
            echo $error->getMessage();
        }
    }
}