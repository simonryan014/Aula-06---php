<?php
    abstract class Conta{
        public $saldo = 0;

        abstract function depositar($valor);

        abstract function sacar($valor);

    }

    class ContaCorrente extends Conta{
        function depositar($valor) {
            $this->saldo += $valor;
        }

        function sacar($valor) {
            $this->saldo -= $valor;
        }

        function transferir($valor) {
            $this->saldo -= $valor;
        }
    }

    $novaConta1 = new ContaCorrente();

    $novaConta2 = new ContaCorrente();

    $novaConta1->transferir('xxx-xxx', 500);

    $novaConta2->depositar(500);
    
     echo "Saldo: ".$novaConta1->saldo;

     echo "Saldo: ".$novaConta2->saldo;
?>