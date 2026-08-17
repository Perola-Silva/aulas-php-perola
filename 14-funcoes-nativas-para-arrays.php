<!DOCTYPE html>
<html lang="en">
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>