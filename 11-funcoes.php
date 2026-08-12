<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>

    <link rel="stylesheet" href="/CSS/bootstrap.min (1).css">

    <style>
        body {
            font-family: cursive;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Trabalhando com funções</h1>
        <hr>

        <h2>Função como procedimento (ou sub-rotina)</h2>
        <p>Procedimentos não retornam nada.</p>

<?php 
function exibirDadosDoAutor(){
    echo "<h4>Fulano de tal</h4>";
    echo "<p>Aplicação <b>Back-End</b> como exemplo</p>";
}
?>

        <h3>Chamar/Invocar a função/procedimento</h3>
        <?php 
        exibirDadosDoAutor()
        ?>
        <div><?php exibirDadosDoAutor() ?></div>

        <hr>

        <?php 
        function somar ($valor1, $valor2){
            $total = $valor1 + $valor2;
            return $total;
        }
        ?>

        <h3>Chamda/retorno da função somar</h3>
        <p>Resultado 1: <?= somar(10, 20) ?></p>
        <p>Resultado 2: <?= somar(1234, 250) ?></p>
        <p>Resultado 3: <?= somar(2, 10.5) ?></p>

        <?php 
        // Variavel de escocpo GLOBAL
        $precoProdutoA = 250;
        $precoProdutoB = 300;  

        // Podemos passar valores de outras variáveis para os parâmetros de uma função
        $resultadoProdutos = somar($precoProdutoA, $precoProdutoB);
        ?>

        <p>Resultado 4: <?= $resultadoProdutos ?></p>

        <!-- Utilizando função como parte de condição de um if -->
        <?php if(somar (100, 500) > 1200): ?>
            <p class="text-success">Meta atingida! :D</p>
        <?php else: ?>
            <p class="text-danger">Meta não atingida. :|</p>
        <?php endif; ?>

        <hr>

        <h2>Função com parâmetros opcionais</h2>

        <?php 
        // Neste caso, deixamos o parâmetro pessoa com um valor padrão (no exemplo, uma string vazia)
        function exibirMensagem($mensagem, $pessoa = ""){
            return "Olá, $mensagem $pessoa";
        }
        ?>

        <p>Saudação 1: <?= exibirMensagem("boa tarde", "Samuel") ?></p>
        <p>Saudação 2: <?= exibirMensagem("bom dia") ?></p>

        <hr>

        <h2>Função com indução de tipos de dados</h2>
        <p>Nesta abordagem, definimos tipos de dados para os parâmetros e para o retorno da função.</p>

        <?php 
        function verificarNegativo(int $valor){
            if($valor < 0) return "é negativo";
            return"não é negativo";
        }
        ?>

        <p>Número 10: <?= verificarNegativo(10) ?></p>
        <p>Número -10: <?= verificarNegativo(-10) ?></p>

        <hr>

        <h2>Função anônima (ou lambda)</h2>

        <?php 
        // SEMPRE DECLARE primeiro a função antes de chamar
        $multiplicar = function(float $valor1, float $valor2){
            return $valor1 * $valor2;
        };
        ?>

        <!-- Repare o uso do $ junto com o nome da função: -->
        <p>Exemplo: <?= $multiplicar(10, 2) ?></p>

        <hr>

        <h2>Arrow Function</h2>

        <?php 
        // Observe que omitimos as chaves e o return
        $subtrair = fn(float $valor1, float $valor2): float => $valor1 - $valor2;
        ?>

        <p>Exemplo: <?= $subtrair(10, 2) ?></p>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>