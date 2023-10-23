<?php
 require "core/boot.php"; #database connection
 Router::load("route.php")->direct(Request::uri(),$_SERVER["REQUEST_METHOD"]);
 #routing
?>
