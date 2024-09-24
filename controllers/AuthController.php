<?php
//requer arquivo 'user.php' que contem model user com a fnção de manipulação de dados de usuário
require_once 'models/user.php';

class AuthController
{
    //Cria função responsável pelo processo de login
    public function login()
    {
        // Verifica se a requisição HTTP é do tipo POST, ou seja, se o formulário foi enviado 
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

        }
    }
}
?>