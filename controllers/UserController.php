<?php
class UseController{
    public function register(){
        //verifica se a requisição HTTP é do tipo POST (se o formulário foi enviado)
        if($_SERVER['RESQUEST_METHOD']=='POST'){
            //Coleta os dados enviados pelo formulário e organiza em um array
            $data = [
                'nome' => $_POST['nome'],
                'email' => $_POST['email'],
                'senha' => password_hash($_POST['senha'], PASSWORD_DEFAULT),
                'perfil' => $_POST['perfil']
            ];
            //chama o método create do model USer para criar um novo usuário no BD
            User::create($data);
            header('location: index.php');
        }else{
            //se a requisição nãofor POST (por exemplo,GET), carrega a página de destino
            include 'views/register.php';
        }  
    }
 
}
?>