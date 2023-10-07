<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treino_Cartão</title>
    <!-- Inclua os estilos Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Informações do Cartão de Crédito</h2>
        <form action="processar_formulario.php" method="post">
            <div class="mb-3">
                <label for="nomeTitular" class="form-label">Nome do Titular:</label>
                <input type="text" class="form-control" id="nomeTitular" name="nomeTitular" required>
            </div>
            <div class="mb-3">
                <label for="numeroCartao" class="form-label">Número do Cartão:</label>
                <input type="text" class="form-control" id="numeroCartao" name="numeroCartao" required>
            </div>
            <div class="mb-3">
                <label for="dataValidade" class="form-label">Data de Validade:</label>
                <input type="text" class="form-control" id="dataValidade" name="dataValidade" required>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>

        <?php
        require './Saldo.php'; 
        require './SaldoCorrente.php';
        require './Saldofaltando.php';

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

        $valorSaque = 300;
        if ($conta->sacar($valorSaque)) {
            echo "Saque de " . $valorSaque . " realizado com sucesso. Novo saldo: " . $conta->getSaldo() . "\n";
        } else {
            echo "Saldo insuficiente para o saque.\n";
        }
        $saldoFaltando = new Saldofaltando(1000);
echo "<h2 class='mt-5'>Dados da Cartão:</h2>";
echo "<p>Nome do titular: Nome do Cartão: João da Silva</p>";
echo "<p>Número: 1234 5678 9012 3456</p>";
echo "<p>Data de Validade: 12/25</p>";
echo "<p>Dados da Cartão:</p>";
echo "<p>Nome do titular: " . $saldoFaltando->ExibirSaldo() . "</p>";
echo "<p>Número do cartão: 1234567890123456</p>";
echo "<p>Saldo do cartão: " . $saldoFaltando->ExibirSaldo() . "</p>";

if ($saldoFaltando->sacar(300)) {
    echo "Saque de 300 realizado com sucesso. Novo saldo: " . $saldoFaltando->getSaldo() . "\n";
} else {
    echo "Saldo insuficiente para o saque.\n";
}
        ?>
    </div>

    <!-- Inclua os scripts Bootstrap (jQuery e Popper.js) e o Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
