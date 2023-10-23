<?php
  class Connection{
    public static function make($data){
      $config = new Connection();
      $config = $data;
      $username =$config [" username"];
      $password =$config["password"];
      $host = $config['host'];
      $db = $config['dbname'];
     try{
       return  $pdo = new PDO("$host;dbname=$db",$username,$password);
        }catch (PDOException $e){
          echo $e->getMessage();
        }  
    }//$pdo = new PDO("mysql:dbhost=localhost;dbname=todo",'root','');
 }
?>