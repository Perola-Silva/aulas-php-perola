<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio-07</title>
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
        <h1>Simulação e manipulação de dados a partir de formulário - recebimido</h1>

<?php 
    $erros = [];

    if($_SERVER["REQUEST_METHOD"] === "POST"){
    $produto = filter_input(INPUT_POST, 'produto', FILTER_SANITIZE_SPECIAL_CHARS);
    $fabricante = $_POST['fabricante'];
    $preco = filter_input(INPUT_POST, 'preco', FILTER_SANITIZE_NUMBER_FLOAT);
    $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_NUMBER_INT);

    if(empty($produto)) $erros[] = "O campo de produto é obrigatório";
    if(empty($fabricante)) $erros[] = "O campo de fabricante é obrigatório";
    if(empty($preco)) $erros[] = "O campo de preço é obrigatório";
    if(empty($quantidade)) $erros[] = "O campo de quantidade é obrigatório";

    $fabricantesValidos = ["samsung", "singsong", "gnusmas", "gnosgnis"];
    $filtroPreco = [
        "options" => [
            "min_range" => 100,
            "max_range" => 10000,
        ]
    ];$filtroQuantidade = [
        "options" => [
            "min_range" => 0,
            "max_range" => 1000,
        ]
    ];

    
    if(!in_array($fabricante, $fabricantesValidos)){
        $erros[] = "Opção de fabricante inválida.";
    }

    if(!filter_var($preco, FILTER_VALIDATE_INT, $filtroPreco)) {
        $erros[] = "Preço inválido. O preço deve estar entre 100 e 10000";
    }

    if(!filter_var($quantidade, FILTER_VALIDATE_INT, $filtroQuantidade)) {
        $erros[] = "Quantidade inválida. A idade deve estar entre 0 e 1000";
    }

    if(!empty($erros)):
?>
    <ul>
        <?php foreach($erros as $erro): ?>
        <li><?= $erro ?></li>
        <?php endforeach; ?>
    </ul>
<?php
    else:
?>
    <h2>Dados :D</h2>
    <p>Produto: <?= $produto ?></p>
    <p>Fabricante: <?= $fabricante ?></p>
    <p>Preço: <?= $preco ?></p>
    <p>Quantidade: <?= $quantidade ?></p>
<?php 
    endif;

    }else{
?>
    <div class="alert alert-danger">
        <h2>Acesso inválido!</h2>
        <p>Você deve usar o formulário para enviar os dados.</p>
        <hr>
        <a href="exercicio-07-formulario.php" class="btn btn-primary">Ir para o formulário.</a>
    </div>
<?php  
}
?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>