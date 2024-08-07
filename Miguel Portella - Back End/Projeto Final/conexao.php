<?php

class Conexao{
        private static $conexao;
        public static function getConexao(){
            if(!isset(self::$conexao)){
                self::$conexao = new PDO('mysql:host=127.0.0.1;
                dbname=see','root','',);
            }
            return self::$conexao;
        }

}