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
        <div class="card p-3">
        <h2><code>time()</code></h2>
        <p>Função que retorna o momento atual em segundos contando a partir de 1 de janeiro de 1970, chamamos isso de <b>timestamp</b>. Ela não depende de fuso horário serve para fazer contas com o tempo e não precisa de parâmetros.</p>

        <hr>

        <?php
        date_default_timezone_set("America/Sao_Paulo"); // Necessario para puxar o horario de brasilia em todo o arquivo.
        $agora = time();
        $daquiAUmaSemana = time() + (7 * 24 * 60 * 60);
        ?>

        <p><b>Timestamp agora:</b> <?= $agora ?></p>
        <p><b>Timestamp agora em data:</b> <?= date("d/m/Y", $agora) ?></p>
        <p><b>Dia daqui a uma semana em segundos:</b> <?= $daquiAUmaSemana ?></p>
        <p><b>Dia daqui a uma semana em data:</b> <?= date("d/m/Y", $daquiAUmaSemana) ?></p>
        </div>

        <hr>

        <div class="card p-3">
        <h2><code>getdate()</code></h2>
        <p>Função que transforma o timestamp atual ou um especifico em um array com informações da data.</p>

        <hr>

        <table class="table table-bordered border-light-subtle">
            <tr>
                <th>Array</th>
                <th>Dado</th>
                <th>Exemplo</th>
            </tr>

            <tr>
                <td><b>seconds</b></td>
                <td>Segundos atuais (0 a 59)</td>
                <td><code>45</code></td>
            </tr>
            <tr>
                <td><b>minutes</b></td>
                <td>Minutos atuais (0 a 59)</td>
                <td><code>31</code></td>
            </tr>
            <tr>
                <td><b>hours</b></td>
                <td>Hora atual (0 a 23)</td>
                <td><code>9</code></td>
            </tr>
            <tr>
                <td><b>mday</b></td>
                <td>Dia do mês (1 a 31)</td>
                <td><code>17</code></td>
            </tr>
            <tr>
                <td><b>wday</b></td>
                <td>Dia da semana em número (0=Dom a 6=Sáb)</td>
                <td><code>1</code></td>
            </tr>
            <tr>
                <td><b>mon</b></td>
                <td>Número do mês (1 a 12)</td>
                <td><code>8</code></td>
            </tr>
            <tr>
                <td><b>year</b></td>
                <td>Ano com 4 dígitos</td>
                <td><code>2026</code></td>
            </tr>
            <tr>
                <td><b>weekday</b></td>
                <td>Nome do dia da semana em inglês</td>
                <td><code>"Monday"</code></td>
            </tr>
            <tr>
                <td><b>month</b></td>
                <td>Nome do mês em inglês</td>
                <td><code>"August"</code></td>
            </tr>
        </table>


        <?php
        $dataAgora = getdate();
        ?>

        <h3>getdate( ) no momento:</h3>
        <pre><?= print_r($dataAgora); ?></pre>

        <hr>

        <h3>getdate( ) para valores especificos:</h3>
        <p><b>Ano agora:</b> <?= $dataAgora["year"] ?></p>
        <p><b>Hora agora:</b> <?= $dataAgora["hours"] ?></p>
        <p><b>Minutos agora:</b> <?= $dataAgora["minutes"] ?></p>
        <p><b>Dia da semana agora:</b> <?= $dataAgora["weekday"] ?></p>
        </div>

        <hr>

        <div class="card p-3">
        <h2><code>mktime()</code></h2>
        <p>Função que consegue calcular o timestamp com os dados de (hora, minuto, segundo, mês, dia e ano) tanto de uma data do passado, quanto uma data do futuro</p>

        <hr>

        <p><b>Ordem dos argumentos:</b> mktime(hora, minuto, segundo, mês, dia, ano);</p>

        <?php
        $nacimento = mktime(21, 21, 0, 12, 9, 2007);
        $aniversarioM = mktime(14, 41, 0, 12, 25, 2030);
        ?>

        <p><b>Timestamp de 09/12/2007 as 21:21:</b> <?= $nacimento ?></p>
        <p><b>Timestamp de 25/12/2030 as 14:41:</b> <?= $aniversarioM ?></p>
        </div>

        <hr>

        <div class="card p-3">
        <h2><code>checkdate()</code></h2>
        <p>Função que serve para validar se uma data existe ou não considerando anos bissextos e número de meses e dias, sempre vai retornar um resultado true ou false.</p>

        <hr>

        <p><b>Ordem dos argumentos:</b> checkdate(mês, dia, ano);</p>

        <?php
        $status2026 = checkdate(2, 29, 2026) ? "Válida" : "Inválida"; // 2026 não é bissexto -> false
        $status2028 = checkdate(2, 29, 2028) ? "Válida" : "Inválida"; // 2028 é bissexto -> true
        ?>

        <p><b>Ano não bissesto (29/02/2026):</b> <?= $status2026 ?></p>
        <p><b>Ano bissesto (29/02/2028):</b> <?= $status2028 ?></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>