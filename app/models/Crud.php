<?php

namespace app\models;


class Crud extends Conection
{
    public function create()
    {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $sql = 'INSERT INTO tb_person(name, email)  VALUES (?,?)';
        $conn = $this->connect();
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $name);
        $stmt->bindParam(2, $email);
        $stmt->execute();
        return $stmt;
    }
    public function read()
    {
        $conn =Conection::connect();
        $sql = "SELECT * FROM `tb_person` ORDER BY name";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $read = $stmt->fetchAll();
        return $read;
    }
    public function update()
    {
    
    }
    public function delete()
    {
    
    }
    
}