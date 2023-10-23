<?php
  namespace core;
  class App{
    static $data=[];
    public static function bind($key, $value){
        return static::$data[$key] = $value;
    }
    public static function get($key){
        return static::$data[$key];
    }
  }
 
//  class App{
//     static $data;
//     public static function bind($key,$value){
//         return static::$data[$key]=$value;
//     }
   
//     public static function get($key){
//         return static::$data[$key];
//     }
 //}
 
?>