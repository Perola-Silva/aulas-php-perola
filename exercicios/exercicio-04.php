<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        body{
            font-family: cursive;
            background-color: #080000;
            color: aliceblue;
        }
    </style>
</head>
<body>
    <h1>Exercício 04: estruturas de repetição (loops) e estruturas de dados</h1>

<?php 
$linguagens = [
    ["id" => 1,
    "linguagem" => "HTML",
    "funcao" => "Estruturação"],

    ["id" => 2,
    "linguagem" => "CSS",
    "funcao" => "Estilos"],

    ["id" => 3,
    "linguagem" => "JS",
    "funcao" => "Comportamentos"],

    ["id" => 4,
    "linguagem" => "PHP",
    "funcao" => "Back-End"],

    ["id"=> 5,
    "linguagem" => "SQL",
    "funcao" => "Manipulação de dados"]
];

foreach($linguagens as $linguagem):
?>

<p><?= $linguagem["id"] ?></p>
<p><?= $linguagem["linguagem"] ?></p>
<p><?= $linguagem["funcao"] ?></p>


<?php 
endforeach;
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>