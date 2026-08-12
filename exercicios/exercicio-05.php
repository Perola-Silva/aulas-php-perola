<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 05</title>

    <link rel="stylesheet" href="/CSS/bootstrap.min (1).css">

    <style>
        body {
            font-family: cursive;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>Exercício 05: funções</h1>

    <hr>

    <?php 
    function calculoMedia(float $nota1, float $nota2, float $nota3){
        return $media = ($nota1 + $nota2 + $nota3) / 3;
    };
    ?>

    <p><?= calculoMedia(10, 7, 5) ?></p>
    

    <?php 
    function situacaoAluno($media){
        if($media >= 7 ){
            return $situacao = "Aprovado";
        } else {
            return $situacao = "Reprovado";
        }
    }
    ?>

    <p><?= situacaoAluno() ?></p>

    </div>
</body>
</html>