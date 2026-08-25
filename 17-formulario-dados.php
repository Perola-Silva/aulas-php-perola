<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Processamento dos Dados</title>
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
/* $_POST e $_GET
Arrays superglobais que possuem os dados
enviados a partir de formulários e/ou
links dinâmicos. */

// Lista de possíveis encontrados ao longo do processamento
$erros = [];

// Verificando se houve uma requisição POST
if( $_SERVER["REQUEST_METHOD"] === "POST" ){

    // Capturando e sanitizando/limpando os dados de cada campo
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_SPECIAL_CHARS);

    /* Regras para o campo de Interesses */
    $interessesValidos = ["html", "css", "javascript"];

    // Filtrando as opções de interesses e tornando obrigatório o uso de array 
    $interesses = filter_input(
        INPUT_POST, 'interesses', FILTER_SANITIZE_SPECIAL_CHARS, FILTER_REQUIRE_ARRAY
        ) ?? []; 

    // Se $interesses NÃO É um array
    if(!is_array($interesses)){
        // Garantindo que ao menos vire um array vazio
        $interesses = [];

        // Registrando uma mensagem de erro no array de erros
        $erros[] = "Seleção inválida de interesses";
    }

    // Comparar os dois arrays (o do formulário e o válidos) checando se os valores "batem"
    $interessesValidados = array_intersect($interesses, $interessesValidos);
    
    /* Informativos */
    // Define uma lista de opções válidas conforme o formulário
    $opcoesValidas = ["sim", "nao"];

    // Filtramos a entrada que o usuário escolheu
    $informativos = filter_input(INPUT_POST, 'informativos', FILTER_SANITIZE_SPECIAL_CHARS);
    
    // Verificamos se a escolha do usuário é uma das válidas. 
    // Se sim, usamos ela. Senão, usamos "nao"
    $informativos = in_array($informativos, $opcoesValidas) ? $informativos : "nao";

    /* Validações (campos obrigatórios) */
    if(empty($nome)) $erros[] = "O campo nome é obrigatório";
    if(empty($email)) $erros[] = "O e-mail de ser informado";
    if(empty($mensagem)) $erros[] = "Você deve escrever uma mensagem";

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) $erros[] = "O e-mail não é válido";

    $filtroIdade = [
        "options" => [
            "min_range" => 0,
            "max_range" => 130,
        ]
    ];

    if(!filter_var($idade, FILTER_VALIDATE_INT, $filtroIdade)) {
        $erros[] = "Idade inválida. A idade deve estar entre 0 e 130";
    }

    if(!empty($erros)):
?>   
    <div class="alert alert-danger">
        <h2>Erros encontrados:</h2>
        <ul class="mb-3">
            <?php foreach($erros as $erro): ?>
                <li> <?= $erro ?> </li>
            <?php endforeach ?>
        </ul>
        <a href="17-formulario.html" class="btn btn-warning">Voltar para o formulário</a>
    </div>
<?php else: ?>
    <h2>Dados recebidos</h2>
    <p>Nome: <?= $nome ?></p>
    <p>E-mail: <?= $email ?></p>
    <p>Idade: <?= $idade ?> anos</p>
    <p>Mensagem: <?= $mensagem ?> </p>
    
    <?php if(!empty($interessesValidados)): ?>
    <p>Interesses: <?= implode(", ", $interessesValidados) ?></p>
    <?php endif; ?>

    <p>Informativos: <?= $informativos === 'sim' ? "Sim" : "Não" ?> </p>
<?php
    endif;
} else {
?>
    <!-- Acesso inválido (usuário não veio do formulário) -->
    <div class="alert alert-danger">
        <h2>Acesso inválido!</h2>
        <p>Você deve usar o formulário para enviar os dados.</p>
        <hr>
        <a href="17-formulario.html" class="btn btn-primary">Ir para o formulário.</a>
    </div>
<?php  
}
?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>