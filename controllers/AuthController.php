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
        $email = $POST['email'];
        $senha = $POST['senha'];

        $user = User::findByEmail(email);

        if($user && password_verify(senha, $user['senha'])){// Verifica se a senha corresponde a um hash
            session_start();

            // Armazena na sessão o ID do usuário e seu perfil 
            $_SESSION['usuario_id'] = $user['id'];
            $_SESSION['perfil'] = $user['perfil'];

            header('Locatio: index.php?action=dashboard');
        }else{
            echo "Email ou senha incorretos";
        }
    }else{
        // Se a requisição não for POST (por exeplo, GET),correga a página de registro
        include 'viwes/login.php';

    }
        }
    }

?>