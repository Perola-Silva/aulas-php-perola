<?php
// Definindo um caminho de base/referencia para os links
const BASE = "/site/";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site usando PHP</title>
    <link rel="stylesheet" href="/CSS/bootstrap.min (1).css">

</head>
<body>
    <header>
        <h1>Site com PHP</h1>
        <nav>
            <a href="<?= BASE ?>index.php">Home</a>
            <a href="<?= BASE ?>cursos.php">Cursos</a>
            <a href="<?= BASE ?>duvidas.php">Dúvidas</a>
            <a href="<?= BASE ?>planos.php">Planos</a>
        </nav>
    </header>

    <main>