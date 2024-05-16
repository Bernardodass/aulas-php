<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais no PHP</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<body>
    <div class="container" >
    <h1>Condicionais</h1>
    <hr>
    <h2>Simples (não tem o <code>else</code>)</h2>
<?php
$numero = 50;
if($numero<100){
    echo "<p>Condição é verdadeira/true</p>";
}
?>
<hr>
<h2>Composta (usa <code>if/else</code>)</h2>
<?php
$numerofrutas = 60;
if($numerofrutas>30){
    echo "<p>Tem muitas frutas</p>";
} else {
    echo "<p>Tem umas frutas</p>";
}
?>
<?php


// controle de estoque
$produto = "geladeira";
$qtdemestoque = 11; // o que temos no momento
$qtdcritica = 10; //mínimo necessário
?>
    <h3>Produto: <?=$produto?></h3>
    <h3>Estoque: <?=$qtdemestoque?></h3>

    <?php

if ($qtdemestoque<$qtdcritica) {
    /* se a quantidade em estoque for abaixo da quantidade crítica, o sistema deve avisar e pedir para repor. */
    echo "<p class=\"alert alert-warning\">É necessário repor o estoque</p>";

    // condicional ANINHADA
    if($qtdemestoque == 0){
        echo "<p class =\"alert alert-danger\">AGORA!!!</p>";
    }
} else {
    /* caso contrário, simplesmente falar que o estoque está normal. */
    echo "<p class =\"alert alert-success\">O estoque está normal</p>";
}
?>
<hr>
<h2>Encadeada (usa <code>if, else, elseif</code>)</h2>
<?php
/* verificando o produto e atribuindo diferentes garantias */
if ($produto == "Ultrabook"){
    $garantia = 5;
} elseif($produto == "geladeira"){
    $garantia = 3;
} elseif($produto == "TV"){
    $garantia = 2;
} else {
    $garantia = 1;
}
?>
<p>O produto <?=$produto?> tem garantia de <span class="badge text-bg-primary"><?=$garantia?></span> anos.</p>
    </div>
</body>
</html>