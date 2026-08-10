<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03 (corrigido)</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


    <style>
        section {
            padding: 4px;
            margin: auto;
            width: 50%;
            border: solid 1px;
        }

        .infantil { background-color: pink; }
        .adulto { background-color: greenyellow; }
        .melhor-idade { background-color: plum; }
    </style>
</head>
<body>
    <h1>Exercício 03 (corrigido)</h1>
    <hr>
<?php  
$idade = 50;
if($idade < 12){
    $ingresso = 25.00;
    $categoria = "Infantil";
    $estilo = "infantil";
} else if($idade < 60){
    $ingresso = 40.00;
    $categoria = "Adulto";
    $estilo = "adulto";
} else {
    $ingresso = 20.00;
    $categoria = "Melhor idade";
    $estilo = "melhor-idade";
}
?>
<!-- Veja: usamos PHP para definir a classe -->
<section class="<?= $estilo ?>">
    <h2>Categoria: <?= $categoria ?> </h2>
    <p>Idade: <b><?= $idade ?> anos </b></p>
    <p>Preço: R$ <?= number_format($ingresso, 2, ",", ".") ?></p>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>


</body>
</html>