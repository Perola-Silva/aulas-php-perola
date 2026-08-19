<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filtros</title>
    <link rel="stylesheet" href="/CSS/bootstrap.min (1).css">

</head>
<body>
    <div class="container">
        <h1>Filtros para validação e sanitização</h1>

        <hr>

        <p>Filtros são recursos de análise e limpeza de dados aplicados através de funções especiais, muitas vezes as funções <code>filter_var()</code> e <code>filter_input()</code> e também o uso de <b>constantes</b> de validação/sanitização.</p>
        
        <h2>Validação</h2>
        <h3><code>FILTER_VALIDATE_EMAIL</code></h3>

        <?php 
        $email = "email@provedor.com";
        $emailValido = filter_var($email, FILTER_VALIDATE_EMAIL);
        ?>
        
        <pre><?php var_dump($emailValido) ?></pre>

        <?php if($emailValido): ?>
            <p class="text-success">E-mail correto :D</p>
        <?php else: ?>
            <p class="text-danger">E-mail incorreto D:</p>
        <?php endif; ?>

        <hr>

        <h3><code>FILTER_VALIDATE_URL</code></h3>

        <?php 
        $redeSocial = "https://www.instagram.com/";
        $redeSocialValida = filter_var($redeSocial, FILTER_VALIDATE_URL);
        ?>

        <pre><?php var_dump($redeSocialValida) ?></pre>
        <?php if($redeSocialValida): ?>
            <a href="<?= $redeSocial ?>" class="btn btn-info">Me siga no instagram</a>
        <?php endif; ?>

        <hr>

        <h2>Sanitização</h2>
        <h3><code>FILTER_SANITIZE_EMAIL</code></h3>

        <?php 
        $contato = "perolla da /sillva@gmail.;com";
        $contatoSanitizado = filter_var($contato, FILTER_SANITIZE_EMAIL);
        ?>

        <p>Contato <b>sem</b> sanitização: <?= $contato ?></p>
        <p>Contato <b>com</b> sanitização: <?= $contatoSanitizado ?></p>

        <hr>

        <h3><code>FILTER_SANITIZE_FULL_SPECIAL_CHARTS</code></h3>

        <?php 
        $nomeCompleto = "<img src= 'https://ladeira.vtexassets.com/arquivos/ids/3293882/PINGENTE-BONECO-PELUCIA-LABUBU-17CM-SORTIDO-UNIDADE---103---COLORIDO.jpg?v=639130871028700000'>";

        $nomeCompletoSanitizado = filter_var(
            $nomeCompleto, FILTER_SANITIZE_FULL_SPECIAL_CHARS
        );
        ?>

        <p>Nome informado: <?= $nomeCompletoSanitizado ?></p>

        <?php 
        // Simulando um ataque de injeção de código JS (XSS - Cross Site Scripting)
        $ataqueXSS = "<script>location = 'https://www.instagram.com/'</script>";
        ?>

        <p>Teste: <?= filter_var($ataqueXSS, FILTER_SANITIZE_FULL_SPECIAL_CHARS) ?></p>

        <h3><code>htmlspecialchars()</code></h3>

        <?php 
        $nomeCompletoCorrigido = htmlspecialchars($nomeCompleto);
        $ataqueEvitado = htmlspecialchars($ataqueXSS);
        ?>

        <p>Nome completo corrigido: <?= $nomeCompletoCorrigido ?></p>
        <p>Ataque evitado: <?= $ataqueEvitado ?></p>

        <hr>

        <h3><code>FILTER_SANITIZE_NUMBER_INT</code></h3>

        <?php 
        $idade = "Tenho 15 anos";
        $idade = filter_var($idade, FILTER_SANITIZE_NUMBER_INT)
        ?>

        <p>Idade: <?= $idade ?></p>

        <hr>

        <h3><code>FILTER_SANITIZE_NUMBER_FLOAT</code></h3>

        <?php 
        $precoInicial = "R$ 1000.78";
        $descontos = "R$500.30";

        $precoInicial = filter_var(
            $precoInicial, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION
        );

        
        $descontos = filter_var(
            $descontos, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION
        );

        $precoFinal = $precoInicial - $descontos;
        ?>

        <p>Preço inicial: <?= $precoInicial ?></p>
        <p>Desconto: <?= $descontos ?></p>
        <p>Preço final: <?= $precoFinal ?></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>