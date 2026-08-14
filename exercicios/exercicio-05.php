<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 05</title>

    <link rel="stylesheet" href="/CSS/bootstrap.min (1).css">

</head>
<body>
    <div class="container">
    <h1>Exercício 05: funções</h1>

    <?php 
    $nota1 = 7;
    $nota2 = 3;
    $nota3 = 6;

    function calculoMedia(float $nota1, float $nota2, float $nota3):float{
        return ($nota1 + $nota2 + $nota3) / 3;
    };

    $media = calculoMedia($nota1, $nota2, $nota3);

    function situacao(float $media):string{
        if($media >= 7 ) return  "Aprovado";
        return  "Reprovado";
    };

    $situacao = situacao($media);
    $cor = ($situacao == "Aprovado") ? "text-info" : "text-danger";
    ?>

    <p><?= $media ?></p>
    <p class="<?= $cor ?>"><?= $situacao ?></p>

    </div>
</body>
</html>