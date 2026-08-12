<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        body {
            font-family: cursive;
            background-color: #0c0c0c;
            color: aliceblue;
        }

        .table-custom-striped tbody tr:nth-child(even) td {
            background-color: #fcdada; 
            color: #000000;             
        }
    </style>
</head>

<body>
    <div class="container border border-light-subtle rounded-3 p-3">
    <h1>Exercício 04: estruturas de repetição (loops) e estruturas de dados</h1>
    <hr>

    <?php
    $linguagens = [
        [
            "id" => 1,
            "linguagem" => "HTML",
            "funcao" => "Estruturação"
        ],

        [
            "id" => 2,
            "linguagem" => "CSS",
            "funcao" => "Estilos"
        ],

        [
            "id" => 3,
            "linguagem" => "JS",
            "funcao" => "Comportamentos"
        ],

        [
            "id" => 4,
            "linguagem" => "PHP",
            "funcao" => "Back-End"
        ],

        [
            "id" => 5,
            "linguagem" => "SQL",
            "funcao" => "Manipulação de dados"
        ]
    ];
    ?>

    <table class="table table-bordered border-light table-custom-striped">

        <tr class="table-dark">
            <th>ID</th>
            <th>Linguagem</th>
            <th>Função</th>
        </tr>

        <?php
        foreach ($linguagens as $linguagem):
        ?>

            <tr>
                <td><?= $linguagem["id"] ?></td>
                <td><?= $linguagem["linguagem"] ?></td>
                <td><?= $linguagem["funcao"] ?></td>
            </tr>

        <?php
        endforeach;
        ?>

    </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>