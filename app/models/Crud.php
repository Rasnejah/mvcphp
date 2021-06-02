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
        $sql = "SELECT * FROM tb_person ORDER BY name";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $read = $stmt->fetchAll();
        return $read;
    }
    public function alterar()
    {        
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

        $sql = "UPDATE tb_person SET name= :name, email= :email WHERE id= :id";
        $conn = $this->connect();

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt;
    }
    public function deleteRegister()
    {
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS); //
        $sql = "DELETE FROM tb_person WHERE id= ?";
        $conn = $this->connect();

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt;
    }
    public function fechAllById()
    {
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
        $sql = 'SELECT * FROM tb_person WHERE id = ?';
        $conn = $this->connect();
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(1,$id);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
    
}