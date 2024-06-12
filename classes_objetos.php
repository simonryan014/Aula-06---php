<?php
    class Usuario{

        // Atributos da classe
        public $nome;
        protected $cpf;
        private $endereco;

        // Construtor da classe
        function Usuario(){
            $this->preparaUsuarios();
        }

        // Métodos
        private function preparaUsuarios(){
            $this->nome = "Leonardo";
            $this->cpf = "99999999999";
            $this->endereco = "Rua Fulanode Tal número 0";
        }

        public function getCpf(){
            return $this->cpf;
        }

        public function getNome(){
            return $this->nome;
        }

        function getEndereco(){
            return $this->endereco;
        }
    }

    // Instanciandoo objeto e acessando seus respectivos métodos
    $usu = new Usuario();

    $usu->getCpf();

    $usu->getNome();
?>