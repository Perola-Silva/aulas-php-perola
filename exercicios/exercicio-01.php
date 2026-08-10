<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 (corrigido)</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


    <style>
        .destaque { color: red; }
    </style>
</head>
<body>
    <h1>Exercício 01 (corrigido)</h1>
    <hr>
    <!-- e mostre no HTML uma mensagem apresentando o nome da pessoa, o nome do curso, a carga horária do curso e o limite de faltas.
Destaque alguns destes dados usando CSS (com classes ou inline). -->
<?php
$data = "29/07/2026";
const NOME = "Tiago"; // ou define()
$curso = "Téc. Informática para Internet";
$cargaHoraria = 1000;
$limite = $cargaHoraria * 0.25;

// Gerar via PHP a saída HTML
echo "<p class='destaque'>Aluno: ".NOME."</p>";
echo "<p><b>Curso: </b>$curso</p>"; // interpolação
?>
<!-- Forma simplificada de saída HTML: usando PHP onde precisa -->
<p class="destaque">Aluno: <?=NOME?></p>
<p><b>Curso:</b> <?=$curso?></p>
<ul>
    <li>Carga Horária: <?=$cargaHoraria?> horas</li>
    <li>Limite de faltas: <?=$limite?> horas</li>
</ul>

<?php 
$teste = "jhdshakd";
echo $teste;
?>
<p class="">Teste <?= $teste ?> </p>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>


</body>
</html>