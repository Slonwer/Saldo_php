<?php
class Saldofaltando  {
    private int $saldo;

    public function __construct($saldoInicial = 0) {
        $this->saldo = $saldoInicial;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function depositar($quantia) {
        if ($quantia > 0) {
            $this->saldo += $quantia;
            return true; 
        } else {
            return false; 
        }
    }

    public function sacar($quantia) {
        if ($quantia > 0 && $quantia <= $this->saldo) {
            $this->saldo -= $quantia;
            return true; 
        } else {
            return false; 
        }
    }
}

$valorTotal = 1000; 
$valorParcial = 250; 

$porcentagem = ($valorParcial / $valorTotal) * 100;

if ($porcentagem >= 75) {
    echo "A porcentagem é maior ou igual a 75%.";
} elseif ($porcentagem >= 50) {
    echo "A porcentagem está entre 50% e 75%.";
} elseif ($porcentagem >= 25) {
    echo "A porcentagem está entre 25% e 50%.";
} else {
    echo "A porcentagem é menor que 25%.";
}

echo " A porcentagem é: " . $porcentagem . "%";

$conta = new Saldo(1000);
echo "Saldo atual: " . $conta->getSaldo() . "\n";

if ($conta->depositar(500)) {
    echo "Depósito de 500 realizado com sucesso. Novo saldo: " . $conta->getSaldo() . "\n";
} else {
    echo "Depósito inválido.\n";
}

if ($conta->sacar(300)) {
    echo "Saque de 300 realizado com sucesso. Novo saldo: " . $conta->getSaldo() . "\n";
} else {
    echo "Saque inválido.\n";
}
?>
