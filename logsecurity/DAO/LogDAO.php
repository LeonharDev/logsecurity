<?php

    require_once dirname(__FILE__)."/../db/DB_Cnx.php";

    class LogDAO{
        
        private static $cnx;
        
        public function __construct(){
            self::$cnx=DB_Cnx::getInstancia();
        }

        public function inserir(Log $log){

            $query=self::$cnx->prepare("INSERT INTO logs(idftion, passwrd, infoadc, nome, dominio, relevancia)
                                        VALUES (?, ?, ?, ?, ?, ?)");

            $query->bindValue(1, $log->getIdentificacao());
            $query->bindValue(2, $log->getSenha());
            $query->bindValue(3, $log->getAdicional());
            $query->bindValue(4, $log->getNome());
            $query->bindValue(5, $log->getDominio());
            $query->bindValue(6, $log->getRelevancia());

            if ($query->execute()===TRUE) {
                header("location:../logs.php");
            } else {
                echo("Erro ao cadastrar log :(");
                die();
            }
        }
        
        public function atualizar(Log $log){

            $query = self::$cnx->prepare("UPDATE logs
                                          SET idftion=?, passwrd=?, infoadc=?, nome=?, dominio=?, relevancia=?, backup=?
                                          WHERE idlog=?");

            $query->bindValue(1, $log->getIdentificacao());
            $query->bindValue(2, $log->getSenha());
            $query->bindValue(3, $log->getAdicional());
            $query->bindValue(4, $log->getNome());
            $query->bindValue(5, $log->getDominio());
            $query->bindValue(6, $log->getRelevancia());
            $query->bindValue(7, $log->getBackup());
            $query->bindValue(8, $log->getIdlog());

            if ($query->execute()===TRUE) {
                header("location:../logs.php");
            } else {
                echo("Erro ao editar log :(");
                die();
            }
        }
        
        public function deletar($id){
            $query = self::$cnx->prepare("DELETE FROM logs
                                          WHERE idlog=?");

            $query->bindValue(1, $id);
            
            $query->execute();
        }
        
        public function listarAll($busca){
            $likeparam="%".$busca."%";

            $query=self::$cnx->prepare("SELECT idlog, idftion, nome, dominio, relevancia, backup
                                        FROM logs 
                                        WHERE idftion LIKE ? OR nome LIKE ? OR dominio LIKE ?
                                        ORDER BY relevancia, nome;");
                                        
            $query->bindValue(1, $likeparam);
            $query->bindValue(2, $likeparam);
            $query->bindValue(3, $likeparam);

            $query->execute();
    
            return $query->fetchAll();
        }
         
        public function listar($id){
            $query=self::$cnx->prepare("SELECT idlog, idftion, passwrd, infoadc, nome, dominio, relevancia, backup
                                        FROM logs
                                        WHERE idlog=?");
                                        
            $query->bindValue(1, $id);
            $query->execute();
    
            return $query->fetch();
        }
    }
?>