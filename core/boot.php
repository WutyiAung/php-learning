<?php
use core\App;
   require "vendor/autoload.php";
   require "core/functions/function.php";
                         # database=>[username',password,host,dbname]
   App :: bind("config" , require "config.php");
   App ::bind("database", new queryBuilder(
         Connection::make(App::get("config")["database"]))
   );

   App::get("database"); // database connection
  
?>