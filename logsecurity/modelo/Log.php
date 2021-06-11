<?php

	class Log{
		private $id;
        private $identificacao;
        private $senha;
        private $adicional;
        private $nome;
        private $dominio;
        private $relevancia;
        private $backup;

		public function setId($valor){
			$this->id=$valor;
		}
		public function getId(){
			return $this->id;
		}

        public function setIdentificacao($valor){
			$this->identificacao=$valor;
		}
		public function getIdentificacao(){
			return $this->identificacao;
		}

        public function setSenha($valor){
			$this->senha=$valor;
		}
		public function getSenha(){
			return $this->senha;
		}

        public function setAdicional($valor){
			$this->adicional=$valor;
		}
		public function getAdicional(){
			return $this->adicional;
		}

        public function setNome($valor){
			$this->nome=$valor;
		}
		public function getNome(){
			return $this->nome;
		}

        public function setDominio($valor){
			$this->dominio=$valor;
		}
		public function getDominio(){
			return $this->dominio;
		}

        public function setRelevancia($valor){
			$this->relevancia=$valor;
		}
		public function getRelevancia(){
			return $this->relevancia;
		}

        public function setBackup($valor){
			$this->backup=$valor;
		}
		public function getBackup(){
			return $this->backup;
		}
    }
?>