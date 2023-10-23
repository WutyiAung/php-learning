<?php
 function dd($var){
   return die(var_dump($var));
 }
 function view($fileName,$data =[]){
  extract($data); /* $data = [ "users" => $users ] 
  users index turn to $users it can be used in index.view.php*/ 
  require "view/$fileName.view.php";
 }
 function redirect($uri){
   header("location: $uri");
 }
 function request($name){
   if($_SERVER['REQUEST_METHOD']==="POST"){
     return $_POST[$name];
   }
   if($_SERVER['REQUEST_METHOD'==="GET"]){
    return $_POST[$name];
   }
 }
?>