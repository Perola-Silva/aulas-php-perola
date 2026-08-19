<?php require "recursos.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclsão de recursos</title>
    <link rel="stylesheet" href="/CSS/bootstrap.min (1).css">
</head>
<body>
    <div class="container">
        <h1>Inclusão de recursos</h1>

        <hr>

        <p>Utilizamos os comandos <code>include</code> e/ou <code>require</code> para importar arquivos com recursos externos de qualquer natureza, permitindo assim a reutilizção de código</p>

        <h2>Exemplos de uso/acesso</h2>
        <p>Estamos estudando no <?= ESCOLA ?></p>
        <p>Para fazer este curso o aluno deve ser maior de idade.</p>
        <p>Como você <?= ALUNO ?> tem 20 anos, você é <?= verificarIdade(20) ?></p>

        <hr>

        <h2>Exemplo de carregamento de conteúdo parcial/fragmentado</h2>

        <section>
            <h3>Título qualquer</h3>
            <?php include "textos.php"; ?>

            <ul>
                <?php foreach($tecnologias as $tecnologia): ?>
                    <li><?= $tecnologia ?></li>
                <?php endforeach; ?>
            </ul>
        </section>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
</body>
</html>