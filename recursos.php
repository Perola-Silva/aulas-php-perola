<?php //recursos.php
const ALUNO = "Tiago";
define("ESCOLA", "Senac Penha");
$curso = "Técnico em informática para internet";
$tecnologias = ["PHP", "SQL", "HTML", "CSS", "JavaScript"];
function verificarIdade(int $idade):string {
    return $idade>= 18 ? "maior" : "menor";
}
