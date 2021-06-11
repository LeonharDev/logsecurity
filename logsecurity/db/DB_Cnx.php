<?php
    abstract class DB_Cnx{
        
        const USUARIO="root";
        const SENHA="";
        
        private static $instancia;
        
        public static function getInstancia(){
            if(self::$instancia == null){
                $stringCnx="mysql:host=localhost;port=3306;dbname=logsecurity";
                self::$instancia=new PDO($stringCnx, self::USUARIO, self::SENHA);
                self::$instancia->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            
            return self::$instancia;
        }
    }
?>