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

    <h2><code>strip_tags()</code></h2>
    <?php 
    $codigoHTML = "<h3>HTML5 - <a href='http://sp.senac.br'>Senac</a></h3>";
    $textoSemTags = strip_tags($codigoHTML);
    ?>

        <div>
            <?= $codigoHTML ?>
            <?= $textoSemTags ?>
        </div>

        <h2><code>trim()</code></h2>
        <?php 
        $textoComEspacosAdicionais = "  Curso de PHP   ";
        $textoSemEspacos = trim($textoComEspacosAdicionais);

        $textoComQuebras = "\n\n Texto qualquer e etc e tal"; // API
        $textoSemQuebras = trim($textoComQuebras);
        ?>

        <pre><?php var_dump($textoComEspacosAdicionais) ?></pre>
        <pre><?php var_dump($textoSemEspacos) ?></pre>
        <br><br>
        <pre><?php var_dump($textoComQuebras) ?></pre>
        <pre><?php var_dump($textoSemQuebras) ?></pre>

        <h2><code>nl2br()</code></h2> 
        <!-- New Line To Break -->
        <?php 
        $textoContendoQuebras = "A vida é feita de escolhas \n e a cada decisão, uma nova jornada começa. \n Às vezes, o caminho parece claro, \n mas em outras, a névoa da dúvida nos envolve. \n Mesmo assim, é importante seguir em frente. \n A coragem está em continuar, \n mesmo quando as respostas não são evidentes. \n Aprendemos com os erros e acertos, \n e cada experiência nos molda para o que está por vir. \n O segredo é nunca parar de caminhar.";
        ?>

        <p><?= $textoContendoQuebras ?></p>
        <p><?= nl2br($textoContendoQuebras) ?></p>
        <!-- a função pega as "quebras" e transforma em <br> para o HTML -->

        <h2><code>explode()</code></h2>
        <?php 
        $linguagens = "HTML, CSS, JavaScript, PHP, SQL, Python, C#, Java"; 
        $arrayLinguagens = explode(", ", $linguagens);
        ?>

        <pre><?php var_dump($linguagens) ?></pre>
        <pre><?php var_dump($arrayLinguagens) ?></pre>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>