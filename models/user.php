<?php
    require_once 'models/database.php';
 
    class User{
        //função para localizar o usuário pelo email
        public static function findByEmail($email){
            $conn = Database::getConnection();
            $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email =:email");
            $stmt->execute(['email' => $email]);
            return $stmt->fetch(PDO:FETCH_ASSOC);
        }
        //Função para encontrar usuário pelo ID
        public static function find($id){
            $conn = Database::getConnection();
            $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id =:id");
            $stmt->execute(['id' => $id]);
            return $stmt->fetch(PDO:FETCH_ASSOC);
        }
        //Função para criar um novo usuário no banco de dados
        public static function create($data){
            $conn = Database::getConnection();
            $stmt = $conn->prepare("INSERT INTO usuarios (nome, email, senha, perfil) VALUES (:nome, :email, :senha, :perfil)" );
            $stmt->execute($data);
        }
        
        public static function all(){
            $conn = Database::getConnection();
            $stmt = $conn->query('SELECT *FROM usuarios');
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        
    }
    ?>