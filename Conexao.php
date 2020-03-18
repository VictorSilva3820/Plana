<?php
    namespace App\ClassesConect;
    class Conexao{
        public static $instance;
        
        public static function getConn(){
            if(!isset(self::$instance)){
                self::$instance = new \PDO('mysql:host=localhost;dbname=planaDados;charset=utf8','root','');
            }
            return self::$instance;
        }
    }
?>