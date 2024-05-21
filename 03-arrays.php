<?php
include "recursos.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
 
<body>
    <div class="alert alert-info">
        <p>Empresa: <?=EMPRESA?></p>
        <p>Ano fiscal: <?=$anoFiscal?></p>
    </div>
    <hr>
    <h1>Arrays</h1>
    <hr>
    <h2>Arrays numéricos/indexados</h2>
    <?php
 
    //declarando Arrays
    $bandas = ["rush", "slayer", "DIO"];
    $cursos = array("HTML5", "PHP", "Design", "JS");
 
    define("UNIDADES_SESC", ["belenzinho", "bertioga"]);
    const UNIDADES_SENAC = ["Penha", "São Miguel", "Itaquera"];
 
    ?>
    <h3>Acesso e saída de dados</h3>
 
    <p>Curto a banda <?= $bandas[1] ?>.</p>
    <p>Já estudei <?= $cursos[3] ?>.</p>
    <p>Gostaria de conhecer o SESC <?= UNIDADES_SESC[1] ?></p>
    <hr>
 
 
    <h2>arrays associativos</h2>
    <?php
 
    $filme = ["titulo" => "deadpool 2", "ano" => 2018, "genero" => "acão", "personagens" => ["Wade Wilson", "Fanático"]]; //chave associativa
 
    $livro = array("titulo" => "senhor dos anais", "autor" => "tolkien");
    ?>
 
    <h3>Acesso e saida de dados</h3>
    <p>O filme <?= $filme["titulo"] ?> foi lançado em <?= $filme["ano"] ?>.</p>
    <p><?= $livro["titulo"] ?> é bom.</p>
    <hr>
 
 
    <h2>comandos úteis para análise e depuração de arrays</h2>
 
    <h3><code>print_r() </code>e<code> var_dump()</code></h3>
 
    <?php
 
    print_r($bandas);
    ?>
    <br>
    <?php
    var_dump($livro);
    ?>
    <pre><?= print_r($bandas) ?></pre>
    <pre><?= var_dump($bandas) ?></pre>
</body>
 
</html>