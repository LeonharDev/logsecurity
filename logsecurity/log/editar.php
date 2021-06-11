<?php

    require_once "../modelo/Log.php";
    require_once "../DAO/LogDAO.php";

    if(isset($_POST["salvar"])){
        $log=new Log();

        $log->setId($_POST["id"]);
        $log->setIdentificacao($_POST["identificacao"]);
        $log->setSenha($_POST["senha"]);
        $log->setAdicional($_POST["adicional"]);
        $log->setNome($_POST["nome"]);
        $log->setDominio($_POST["dominio"]);
        $log->setRelevancia($_POST["relevancia"]);
        $log->setBackup($_POST["backup"]);

        $logDAO=new LogDAO();
        $logDAO->atualizar($log);
    }

?>