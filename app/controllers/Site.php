<?php

namespace app\controllers;

use app\models\Crud;

class Site extends Crud
{
    public function home()
    {
        require_once __DIR__ . '/../views/home.php';
    }
    public function galeria($foto)
    {
        $photo = $foto;
        require_once __DIR__ . '/../views/galeria.php';
    }
    public function cadastro()
    {
        $registration = $this->create();
        $editForm =false;
        $title = "Pagina de cadastro";
               
        require_once __DIR__ . '/../views/cadastro.php';
    }
    public function consulta()
    { 
        $registrationQuery = $this->read();  
        require_once __DIR__ . '/../views/consulta.php';
    }
    public function editar()
    {     
        $editForm = true;
        $title = "Pagina Editar Cadastros";
        $registrationQueryById = $this->fechAllById();
               
        require_once __DIR__ . '/../views/cadastro.php';
    }
    public function update(){
        $update = $this->alterar();
        header("Location:?router=site/consulta");
    }
}