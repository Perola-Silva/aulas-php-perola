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
        <h1>Simulação e manipulação de dados a partir de formulário</h1>

        <form action="exercicio-07-processamento.php" method="post">
            <div class="mb-3">
                <label class="form-label" for="produto">Nome do produto</label>
                <input class="form-control" type="text" name="produto" id="produto" required>
            </div>

            <div class="mb-3">
                <label class="form-label" for="Fabricante">Fabricante do produto:</label>
                <select class="form-select" name="fabricante" id="fabricante">
                    <option value="samsung">Samsung</option>
                    <option value="singsong">Singsong</option>
                    <option value="gnusmas">Gnusmas</option>
                    <option value="gnosgnis">Gnosgnis</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label" for="preco">Preço do produto:</label>
                <input class="form-control" type="number" name="preco" id="preco" min="100" max="10000" step="0.01">
            </div>

            <div class="mb-3">
                <label class="form-label" for="quantidade">Quantidade do produto:</label>
                <input class="form-control" type="number" name="quantidade" id="quantidade" min="0" max="1000" step="1" required>
            </div>

            <button class="btn btn-primary" type="submit">
                Enviar dado em casa
            </button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>