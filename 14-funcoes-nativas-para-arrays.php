<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções para Arrays</title>
    <link rel="stylesheet" href="/CSS/bootstrap.min (1).css">
</head>
<body>
    <div class="container">
        <h1>Funções nativas para Arrays</h1>

        <hr>

        <h2><code>implode()</code></h2>
        <p>Transforma array em uma string.</p>

        <?php 
        $arrayBandas = ["Red Hot Chilli Pepers", "Green Day", "Metalica"];
        $textoBandas = implode("-", $arrayBandas);
        ?>

        <pre><?php var_dump($arrayBandas) ?></pre>
        <pre><?php var_dump($textoBandas) ?></pre>

        <hr>

        <h2><code>extract()</code></h2>
        <p>Extrai chaves associativas para variáveis.</p>

        <?php 
        $nome = "Beltrano";

        $aluno = ["id" => 1, "nome" => "Fulano", "idade" => 25];
        extract($aluno, EXTR_PREFIX_ALL, "chave");
        // Usamos o segundo parâmetro para definir um prefixo para os nomes
        // Isso evita conflito/sobreescrita de outras variáveis
        ?>

        <ul>
            <li>ID: <?= $chave_id ?></li>
            <li>Nome: <?= $chave_nome ?></li>
            <li>Idade: <?= $chave_idade ?></li>
        </ul>

        <p><?= $nome ?></p>

        <hr>

        <h2><code>array_sum()</code></h2>
        <p>Somando os valores de um array</p>

        <?php 
        $carrinhoDeCompras = [
            "TV_led" => 1200,
            "Ultrabook" => 2500,
            "Geladeira" => 3000
        ];

        $total = array_sum($carrinhoDeCompras); 
        ?>

        <p>Total: <?= $total ?></p>

        <h2><code>array_unique()</code></h2>
        <p>Gera umm novo array removendo elementos duplicados/repetidos um um array.</p>

        <?php 
        $categorias = ["eletronicos", "livros", "roupas", "games", "eletronicos", "livros"];

        $categoriasUnicas = array_unique($categorias); 
        ?>

        <pre><?php var_dump($categorias) ?></pre>
        <pre><?php var_dump($categoriasUnicas) ?></pre>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>