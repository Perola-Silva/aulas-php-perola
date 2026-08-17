<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas: números, data e hora</title>
    <link rel="stylesheet" href="/CSS/bootstrap.min (1).css">

</head>
<body>
    <div class="container">
    <h1>Funções nativas: números, data e hora</h1>
    <hr>

    <h2>Números</h2>

    <h3><code>max()</code> e <code>min()</code></h3>
    <p>Maior valor na lista passada: 
        <?= max(10, -5, 12, 150, 0, 1236.45) ?>
    </p>

    <?php 
    $listaDeNumeros = [2, 10, 1000, 435, 0, -2];
    ?>

    <p>Maior valor exixtente no array:
        <?= max($listaDeNumeros) ?>
    </p>

    <p>Menor valor exixtente no array:
        <?= min($listaDeNumeros) ?>
    </p>


    <h3><code>round()</code>, <code>ceil()</code>, <code>floor()</code>, <code>rand()</code></h3>
    <!-- round(): Varia conforme o valor -->
    <p>Arredondamento: <b><?= round(4.7) ?></b></p>
    <p>Arredondamento: <b><?= round(4.2) ?></b></p>
    <p>Arredondamento: <b><?= round(4.5) ?></b></p>
    <p>Arredondamento para CIMA: <b><?= ceil(4.5) ?></b></p>
    <p>Arredondamento para BAIXO: <b><?= floor(4.5) ?></b></p>

    <h3><code>number_format()</code></h3>

    <?php 
    $preco = 10567.86;
    $numeroComMuitasCasasDecimais = 1458.4567123;
    ?>

    <p>Preço formatado:
    <b>R$ <?= number_format($preco, 2, ",", " ") ?></b>
    </p>
    <p>Número com ajuste de casas decimais:
    <b><?= number_format($numeroComMuitasCasasDecimais, 3, ",", " ") ?></b>
    </p>

    <hr>

    <h2>Data e hora</h2>
    <h3><code>date()</code>, <code>date_default_timezone_set()</code>, <code>strtotime()</code></h3>

    <?php 
    date_default_timezone_set("America/Sao_Paulo");
    $data = date("d/m/Y");
    $hora = date("H:i:s");
    $dataHora = date("d/m/Y H:i");
    ?>

    <p>Data: <?= $data ?></p>
    <p>Data: <?= $hora ?></p>
    <p>Data e hora: <?= $dataHora ?></p>

    <?php 
    $dataFormatoBD = "2020-09-11";

    // Usamos o strtorime() para converter primeiro a data em um timestamp (data em formato numerico). Em seguida, o date aplica o formato desejado.
    $dataFormatada = date("d/m/Y", strtotime($dataFormatoBD));
    ?>

    <p>Data (em formato de sistema/banco): <?= $dataFormatoBD ?></p>
    <p>Data (convertida e formatada): <?= $dataFormatada ?></p>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>