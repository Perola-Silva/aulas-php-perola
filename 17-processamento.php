<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento de dados</title>
    <link rel="stylesheet" href="/CSS/bootstrap.min (1).css">
        <link href="https://fonts.googleapis.com/css2?family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <style>
            body{
                font-family: "Sour Gummy", sans-serif;
            }
        </style>
</head>
<body>
    <div class="container">
        <h1>Recebimento e processamento dos dados</h1>
        <hr>

        <?php 
        // Capturando os dados de cada campo
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $idade = $_POST["idade"];

        // Caso nenhum interesse seja selecionado, a variavel guardara um array vazio
        $interesses = $_POST["interesses"] ?? []; // array
        // Caso nenhuma opção seja selecionada, o valor "nao" fica como padrão
        $informativos = $_POST["informativos"] ?? "nao";
        $mensagem = $_POST["mensagem"];
        ?>

        <h2>Dados recebidos</h2>

        <p>Nome: <?= $nome ?></p>
        <p>E-mail: <?= $email ?></p>
        <p>Idade: <?= $idade ?></p>

        <?php if(!empty($interesses)): ?>
        <p>Interesses: <?= implode(", ", $interesses) ?></p>
        <?php endif; ?>

        <p>Informativo: 
            <?= $informativos === 'sim' ? "Sim" : "Não" ?>
        </p>
        <p>Mensagem: <?= $mensagem ?></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</body>
</html>