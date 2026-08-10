<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 (corrigido)</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">


    <style>
        article {
            padding: 2px;
            border: solid 1px;
            width: 40%;
        }

        .container {
            display: flex;
            gap: 20px;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <h1>Exercício 02 (corrigido)</h1>
    <hr>
<!-- Nele, faça um array associativo e um objeto genérico para armazenar os dados fictícios de duas pessoas diferentes: nome de usuario, email, senha, idade, sexo e cidade. -->
<?php  
$usuario1 = [
    "nome" => "tiago.bsantos",
    "email" => "tiago@gmail.com",
    "senha" => "135465dsadsads",
    "sexo" => "masculino",
    "idade" => 42,
    "cidade" => "São Paulo"
];

$usuario2 = new stdClass;
$usuario2->nome = "Astrogildo";
$usuario2->email = "trotro@gmail.com";
$usuario2->senha = "dsads343";
$usuario2->sexo = "masculino";
$usuario2->idade = 18;
$usuario2->cidade = "Rio de Janeiro";
?>    

<!-- Em seguida, mostre apenas os valores de nome de usuario, email e idade de cada pessoa dentro de tags HTML de conteúdo (como article ou section, além de h2, p etc).
 
🔥Desafio: destaque estes dois blocos de conteúdo usando CSS e mostre-os lado a lado usando Flexbox. -->

<div class="container">
<!-- Dados do usuario1 (array associativo):
Veja o uso dos colchetes e das chaves associativas -->
    <article>
        <h2> <?= $usuario1['nome'] ?> </h2>
        <p>E-mail: <?= $usuario1['email'] ?></p>
        <p>Idade: <?= $usuario1['idade'] ?> anos</p>
    </article>

<!-- Dados do usuario2 (objeto):
Veja o uso da setinha e das propriedades -->    
    <article>
        <h2><?= $usuario2->nome ?></h2>
        <p>E-mail: <?= $usuario2->email ?></p>
        <p>Idade: <?= $usuario2->idade ?> anos</p>
    </article>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>


</body>
</html>