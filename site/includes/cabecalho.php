<?php
// Definindo um caminho de base/referencia para os links
const BASE = "/site/";

// Detectar/guardar o nome da página aberta pelo usuário
// var_dump($_SERVER['PHP_SELF']);
// echo "<br>";
// echo basename($_SERVER['PHP_SELF']);

$pagina = basename($_SERVER['PHP_SELF']);

switch($pagina){
    case 'index.php': $titulo = "Página Inicial"; break;
    case 'cursos.php': $titulo = "Cursos"; break;
    case 'duvidas.php': $titulo = "Duvidas"; break;
    case 'planos.php': $titulo = "Planos"; break;
    default: $titulo = "Consultoria"; break;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?> - Site usando PHP</title>
    <link rel="stylesheet" href="/CSS/bootstrap.min (1).css">
    <link rel="stylesheet" href="/CSS/styles.css">

</head>
<body>
    <header class="text-center">
        <h1>Site com PHP</h1>
        <nav>
            <a href="<?= BASE ?>index.php">Home</a>
            <a href="<?= BASE ?>cursos.php">Cursos</a>
            <a href="<?= BASE ?>duvidas.php">Dúvidas</a>
            <a href="<?= BASE ?>planos.php">Planos</a>
            <a href="<?= BASE ?>consultoria.php">Consultoria</a>
        </nav>
    </header>

    <main class="container">