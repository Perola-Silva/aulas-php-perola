<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções nativas para texto</title>
    <link rel="stylesheet" href="/CSS/bootstrap.min (1).css">
</head>
<body>
    <div class="container">
    <h1>Funções nativas para textos</h1>
    <hr>

    <!-- mb -> multbyte: permite trabalhar com acentos, caracteres especiais, cedilha -->
    <h2><code>mb_strlen()</code></h2>
    <?php 
    $texto = "Uma frase qualquer, com acentos e cedilha: ação, ciência";
    ?>

    <p>String de exemplo: <?= $texto ?></p>
    <p><b>Tamanho da string:</b> <?= mb_strlen($texto) ?></p>

    <h2><code>mb_strtoupper()</code></h2>
    <p><b>Conversão para maiúsculas:</b> <?= mb_strtoupper($texto) ?></p>

    <h2><code>mb_strtolower()</code></h2>
    <p><b>Conversão para minúsculas:</b> <?= mb_strtolower($texto) ?></p>

    <h2><code>str_replace()</code> ou <code>str_ireplace()</code></h2>
    <?php  
    $frase = "Esta é uma frase com palavras feias, como burro, idiota, chato demais e outras palavras ruins (bobo, panaca etc)! Chato mesmo! BOBO pra caramba. Também é um BOBÃO.";

    // Procurando por UMA palavra e substituindo por outra
    $fraseComSubstituicaoDePalavra = str_ireplace("bobo", "cara legal", $frase);

    // Procurando por uma lista de palavras e substituindo por outra coisa "panaca, "burro", "idiota", "chato", "bobão"

    $fraseCensurada = str_ireplace(["panaca", "burro", "idiota", "chato", "bobão", "bobo", "BOBÃO"], "SHHH", $frase)
    ?>

    <p><b>Frase original:</b> <?= $frase ?></p>
    <p><b>Frase com substituição de plavra:</b> <?= $fraseComSubstituicaoDePalavra ?></p>
    <p><b>Frase censurada:</b> <?= $fraseCensurada ?></p>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>