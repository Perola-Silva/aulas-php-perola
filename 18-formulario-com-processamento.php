<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário COM processamento PHP</title>
    <link rel="stylesheet" href="/CSS/bootstrap.min (1).css">
        <link href="https://fonts.googleapis.com/css2?family=Sour+Gummy:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <style>
            body{
                font-family: "Sour Gummy", sans-serif;
            }
        </style>
</head>
<body>
        <div class="container w-50">
        <h1>Formulário COM processamento PHP</h1>
        <hr>
<?php  
if($_SERVER["REQUEST_METHOD"] === "POST"):
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    if(empty($nome) || empty($email)): // if/div validação de campos obrigatórios
?>
        <div class="alert alert-danger">
            <h2>Ops!</h2>
            <p>Você precisa preencher todos os campos!</p>
        </div>
<?php
    else:
?>
    <p class="alert alert-success">Dados enviados com sucesso!</p>
<?php
    endif;
else:
?>
        <form action="" method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">E-mail:</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
<?php  
endif;
?>    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>