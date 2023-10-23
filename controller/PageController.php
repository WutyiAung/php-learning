<?php
namespace controller;
use core\App;
  class PageController{

    public function home(){
      $users = App::get("database")->Fetch("users");//fetch users form db
      view("index",[ "users" => $users ] );
  }
    public function contact(){
        view("contact");
    }
    
    public function service(){
      view("service");
    }
    public function order(){
      view("order");
    }
    public function createUser(){
        App::get("database")->insert(
              "users",#table
              [ 'name'=>request('name') ] #data
            );
            redirect("/");
    }
    public function delete(){
      App::get("database")->delete("users",
            ['name'=>$_POST["name"] ]
            );
            redirect("/");
    }
    public function update(){
      App::get("database")->update(
            "users",[
                'name' => $_POST['name'],
                'update' => $_POST['update']
            ]
            );
            redirect("/");
    }
  }
?>