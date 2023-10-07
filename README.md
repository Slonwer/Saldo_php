# Saldo_php
# Exercício de Controle de Saldo e Cálculo de Porcentagem

## Parte 1: Controle de Saldo

### Classe Saldo

Crie uma classe chamada `Saldo` que tenha os seguintes atributos e métodos:

- Atributo privado: `saldo` (um número inteiro)
- Método construtor: `__construct($saldoInicial = 0)` que inicializa o saldo com um valor padrão de 0.
- Método público: `getSaldo()` que retorna o valor do saldo.
- Método público: `depositar($quantia)` que permite depositar dinheiro na conta, desde que a quantia seja maior que zero. Retorna true se o depósito for bem-sucedido e false caso contrário.
- Método público: `sacar($quantia)` que permite sacar dinheiro da conta, desde que a quantia seja maior que zero e não exceda o saldo disponível na conta. Retorna true se o saque for bem-sucedido e false caso contrário.

### Uso da Classe Saldo

Em um script PHP, crie uma instância da classe `Saldo` com um saldo inicial de 1000.

Realize as seguintes operações:

1. Deposite 500 na conta e exiba uma mensagem indicando se o depósito foi bem-sucedido ou não.
2. Tente sacar 300 da conta e exiba uma mensagem indicando se o saque foi bem-sucedido ou se o saldo é insuficiente.

## Parte 2: Cálculo de Porcentagem

Agora, calcule a porcentagem de um valor em relação a outro. Para isso, faça o seguinte:

1. Defina duas variáveis, `$valorTotal` e `$valorParcial`, com os valores 1000 e 250, respectivamente.
2. Calcule a porcentagem de `$valorParcial` em relação a `$valorTotal` usando a fórmula: `($valorParcial / $valorTotal) * 100`.
3. Com base no resultado do cálculo de porcentagem, exiba mensagens de acordo com as seguintes condições:

   - Se a porcentagem for maior ou igual a 75%, exiba a mensagem "A porcentagem é maior ou igual a 75%".
   - Se a porcentagem estiver entre 50% e 75%, exiba a mensagem "A porcentagem está entre 50% e 75%".
   - Se a porcentagem estiver entre 25% e 50%, exiba a mensagem "A porcentagem está entre 25% e 50%".
   - Caso contrário, exiba a mensagem "A porcentagem é menor que 25%".

Ao final, exiba a porcentagem calculada no formato "A porcentagem é: X%" (substituindo X pelo valor calculado).

**Nota**: Certifique-se de que a classe `Saldo` esteja definida e funcione corretamente em seu código.

