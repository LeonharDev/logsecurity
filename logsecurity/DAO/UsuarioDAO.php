<?php

    require_once dirname(__FILE__)."/../db/DB_Cnx.php";

    class UsuarioDAO{
        
        private static $cnx;
        
        public function __construct(){
            self::$cnx=DB_Cnx::getInstancia();
        }
        
        public function listarAll(){

            $query=self::$cnx->prepare("SELECT idusuario, userusuario, passusuario
                                        FROM usuario;");
                                        
            $query->execute();
    
            return $query->fetchAll();
        }
    }
?>