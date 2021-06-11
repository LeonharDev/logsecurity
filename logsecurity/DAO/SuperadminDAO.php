<?php

    require_once dirname(__FILE__)."/../db/DB_Cnx.php";

    class SuperadminDAO{
        
        private static $cnx;
        
        public function __construct(){
            self::$cnx=DB_Cnx::getInstancia();
        }
        
        public function listarAll(){

            $query=self::$cnx->prepare("SELECT idsuperadmin, superpass, id_usuario
                                        FROM superadmin;");
                                        
            $query->execute();
    
            return $query->fetchAll();
        }
    }
?>