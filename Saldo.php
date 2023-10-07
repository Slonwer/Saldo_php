<?php
class NomeDoCartao {
    private $nome;
    private $numero;
    private $dataValidade;

    public function __construct($nome, $numero, $dataValidade) {
        $this->nome = $nome;
        $this->numero = $numero;
        $this->dataValidade = $dataValidade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getDataValidade() {
        return $this->dataValidade;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function setDataValidade($dataValidade) {
        $this->dataValidade = $dataValidade;
    }
}

class SaldoCorrente {
    public string $nomeTitular;
    public int $numeroCartao;
    public float $saldo;

    public function __construct(string $nomeTitular, int $numeroCartao, float $saldo) {
        $this->nomeTitular = $nomeTitular;
        $this->numeroCartao = $numeroCartao;
        $this->saldo = $saldo;
    }

    public function exibirDados(): string {
        return "Nome do titular: {$this->nomeTitular}<br>" .
               "Número do cartão: {$this->numeroCartao}<br>" .
               "Saldo do cartão: {$this->saldo}<br>";
    }

    public function sacar(float $valor): string {
        if ($valor > 0) {
            if ($valor <= $this->saldo) {
                $this->saldo -= $valor;
                return "Saque de R$ $valor realizado com sucesso. Saldo restante: R$ {$this->saldo}";
            } else {
                return "Saldo insuficiente para o saque.";
            }
        } else {
            return "Valor de saque inválido";
        }
    }
}

$cartao = new NomeDoCartao(" Nome do Cartão: João da Silva", "1234 5678 9012 3456", "12/25");

echo "Nome: " . $cartao->getNome() . "<br>";
echo "Número: " . $cartao->getNumero() . "<br>";
echo "Data de Validade: " . $cartao->getDataValidade() . "<br>";

$saldoCorrente = new SaldoCorrente("João da Silva", 1234567890123456, 1000.0);

echo "Dados da Cartão:<br>";
echo $saldoCorrente->exibirDados();
echo $saldoCorrente->sacar(1500) . "<br>";
?>
