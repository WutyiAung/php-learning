<?php
use controller\PageController;
 $router->get("" ,[PageController::class,"home"]);
 $router->get("contact" ,[PageController::class,"contact"]);
 $router->get("service" ,[PageController::class,"service"]);
 $router->get("order" ,[PageController::class,"order"]);
 $router->post("name" ,[PageController::class,"createUser"]);
 $router->post("delete" ,[PageController::class,"delete"]);
 $router->post("update" ,[PageController::class,"update"]);
 $router->post("contact" ,[PageController::class,"contact"]);
 
 

//  $router->get("","PageController@home");
//  $router->get("contact","PageController@contact");
//  $router->get("service","PageController@service");
//  $router->get("order","PageController@order");

//  $router->post("name","PageController@CreateUser");
//  $router->post("delete","PageController@delete");
//  $router->post("update","PageController@update");
//  $router->get("user","UserController@index")


//  $router->register(
//     [
//        "" => "controller/indexController.php",
//        "contact"=>"controller/contactController.php",
//        "service" => "controller/serviceController.php",
//        "order" =>"controller/orderController.php",
//        "name" => "controller/nameController.php"
      
//     ]
//     );
    
   
?>