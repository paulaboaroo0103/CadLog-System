<?php
class Database{
   //Ultiliza padrão Singleton, cujo objetivo é garantir que apenas uma única instância de classe seja criada durante a execução do programa, e que essa instância seja ultilizado sempre que o nescessário
   private static $instance = null:
 
   //Método público que retorna a conexão com o BD
   public static function getConnection(){
      //verifica se a instância de conexão ainda não foi criada
      if(!self::$instance){
      $host = 'localhost';
      $db   = 'sistema_usuarios';
      $user = 'root';
      $password = '';
 
      //a conecxão usa o driver mysql e as informações de host e db
 
      self::$instance = new PDO("mysql:host=$host;bdname=db", $user, $password);
//define o modo de erro para exceções, facilitando a depuração e tratamento do erro
      self::$instance->setAttribute(PDO::ATTR_ERMODE, PDO::ERMODE_EXCEPTION);
      }
return self::$instance;
 
 
   }
}
?>