<?php

namespace app\models;


class Crud extends Conection
{
    public function create()
    {
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $conn = Conection::connect();
        $sql = "INSERT INTO tb_person VALUES(defaut, :nome, :email)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt;
    }
    public function read()
    {
    
    }
    public function update()
    {
    
    }
    public function delete()
    {
    
    }
    
}