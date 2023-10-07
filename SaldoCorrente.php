<?php

class Saldo {
    protected float $saldo;

    public function __construct(float $saldo) {
        $this->saldo = $saldo;
    }

    public function getSaldo(): float {
        return $this->saldo;
    }

    public function depositar(float $valor): void {
        if ($valor > 0) {
            $this->saldo += $valor;
        }
    }
}

class SaldoCorrente extends Saldo {
    public string $nomeTitular;
    public int $numeroCartao;

    public function __construct(string $nomeTitular, int $numeroCartao, float $saldo) {
        parent::__construct($saldo); 
        $this->nomeTitular = $nomeTitular;
        $this->numeroCartao = $numeroCartao;
    }

    public function exibirDados(): string {
        return "Nome do titular: {$this->nomeTitular}<br>" .
               "Número do cartão: {$this->numeroCartao}<br>" .
               "Saldo do cartão: {$this->getSaldo()}<br>";
    }

    public function sacar(float $valor): string {
        if ($valor > 0) {
            if ($valor <= $this->saldo) {
                $this->saldo -= $valor;
                return "Saque de R$ $valor realizado com sucesso. Saldo restante: R$ {$this->getSaldo()}";
            } else {
                return "Saldo insuficiente para o saque.";
            }
        } else {
            return "Valor de saque inválido";
        }
    }
}
?>
