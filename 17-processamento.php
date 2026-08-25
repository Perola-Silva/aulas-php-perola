<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Formulário</title>
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
    <h1>Formulário HTML e processamento externo com PHP</h1>
    <hr>
    <!-- Sempre use método POST para formulários em geral  -->
    <form action="17-formulario-dados.php" method="post">
        <div class="mb-3">
            <label class="form-label" for="nome">Nome:</label>
            <input class="form-control" type="text" name="nome" id="nome" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="email">E-mail:</label>
            <input class="form-control" type="email" name="email" id="email" required>
        </div>
        
        <div class="mb-3">
            <label class="form-label" for="idade">Idade:</label>
            <input class="form-control" type="number" name="idade" id="idade" min="0" max="130">
        </div>

        <div class="mb-3">
            <p class="mb-2">Interesses:</p>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="interesses[]" id="html" value="html">
                <label for="html" class="form-check-label">HTML</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="interesses[]" id="css" value="css">
                <label for="css" class="form-check-label">CSS</label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="interesses[]" id="javascript" value="javascript">
                <label for="javascript" class="form-check-label">JavaScript</label>
            </div>          
        </div>

        <div class="mb-3">
            <p class="mb-2">Deseja receber informativos?</p>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="informativos" id="sim" value="sim">
                <label for="sim" class="form-check-label">Sim</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="informativos" id="nao" value="nao">
                <label for="nao" class="form-check-label">Não</label>
            </div>
        </div>

        <div class="mb-3">
            <label for="mensagem" class="form-label">Mensagem:</label>
            <textarea required class="form-control" name="mensagem" id="mensagem" rows="6"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">
            Enviar dados
        </button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>