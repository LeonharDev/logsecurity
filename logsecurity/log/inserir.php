<?php

	require_once "../modelo/Log.php";
	require_once "../DAO/LogDAO.php";

	if(isset($_POST["salvar"])){
		$log=new Log();

		$log->setIdentificacao($_POST["identificacao"]);
        $log->setSenha($_POST["senha"]);
        $log->setAdicional($_POST["adicional"]);
        $log->setNome($_POST["nome"]);
        $log->setDominio($_POST["dominio"]);
        $log->setRelevancia($_POST["relevancia"]);
		
		$logDAO=new LogDAO();
		$logDAO->inserir($log);
	}
?>