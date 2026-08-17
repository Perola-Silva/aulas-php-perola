<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>

    <link rel="stylesheet" href="/CSS/bootstrap.min (1).css">
</head>
<body>
    <div class="container">
    <h1>Funções com datas e horarios</h1>
    <hr>

    <h2><code>time()</code></h2>
    <p>Função que retorna o momento atual em segundos contando a partir de 1 de janeiro de 1970, chamamos isso de <b>timestamp</b>. Ela não depende de fuso horário serve para fazer contas com o tempo e não precisa de parâmetros.</p>

    <?php 
    date_default_timezone_set("America/Sao_Paulo"); // Necessario para puxar o horario de brasilia em todo o arquivo.
    $agora = time();
    $daquiAUmaSemana = time() + (7 * 24 * 60 * 60);
    ?>

    <p><b>Timestamp agora:</b> <?= $agora ?></p>
    <p><b>Timestamp agora em data:</b> <?= date("d/m/Y", $agora) ?></p>
    <p><b>Dia daqui a uma semana em segundos:</b> <?= $daquiAUmaSemana ?></p>
    <p><b>Dia daqui a uma semana em data:</b> <?= date("d/m/Y", $daquiAUmaSemana) ?></p>

    <hr>

    <h2><code>getdate()</code></h2>
    <p>Função que transforma o timestamp atual ou um especifico em um array com informações da data.</p>

    <ul>
        <li><b>seconds:</b> os segundos atuais (0 a 59).</li>
        <li><b>minutes:</b> os minutos atuais (0 a 59).</li>
        <li><b>hours:</b> a hora atual (0 a 23).</li>
        <li><b>mday:</b> o dia do mês (1 a 31).</li>
        <li><b>wday:</b> o dia da semana em número (0 para Domingo até 6 para Sábado).</li>
        <li><b>mon:</b> o número do mês (1 a 12).</li>
        <li><b>year:</b> o ano com 4 dígitos (ex: 2026).</li>
        <li><b>weekday:</b> o nome do dia da semana em inglês (ex: "Monday").</li>
        <li><b>month: </b>o nome do mês em inglês (ex: "August").</li>
    </ul>

    <?php 
    $dataAgora = getdate();
    ?>

    <h3>getdate( ) no momento:</h3>
    <pre><?= print_r($dataAgora); ?></pre>

    <h3>getdate( ) para valores especificos:</h3>
    <p><b>Ano agora:</b> <?= $dataAgora["year"] ?></p>
    <p><b>Hora agora:</b> <?= $dataAgora["hours"] ?></p>
    <p><b>Minutos agora:</b> <?= $dataAgora["minutes"] ?></p>
    <p><b>Dia da semana agora:</b> <?= $dataAgora["weekday"] ?></p>

    <hr>

    <h2><code>mktime()</code></h2>
    <p>Função que consegue calcular o timestamp com os dados de (hora, minuto, segundo, mês, dia e ano) tanto de uma data do passado, quanto uma data do futuro</p>

    <p><b>Ordem dos argumentos:</b> mktime(hora, minuto, segundo, mês, dia, ano);</p>

    <?php 
    $nacimento = mktime(21, 21, 0, 12, 9, 2007);
    $aniversarioM = mktime(14, 41, 0, 12, 25, 2030);
    ?>

    <p><b>Timestamp de 09/12/2007 as 21:21:</b> <?= $nacimento ?></p>
    <p><b>Timestamp de 25/12/2030 as 14:41:</b> <?= $aniversarioM ?></p>

    <hr>

    <h2><code>checkdate()</code></h2>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>