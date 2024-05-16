<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Variáveis e constantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>Variáveis e constantes</h1>
    <hr>

    <h2>Declaração e saída de dados usando <code>echo</code></h2>

<?php
// Variáveis
$curso = "Programador Web";
$ano = 2024;
$area = "Back-End";

// Estamos no Programador Web em 2024.

// Saída interpolada (tem que ser com aspas duplas)
echo "<p>Estamos no $curso em $ano.</p>";

// Com aspas simples, não funciona a execução dinâmica
echo '<p>Estamos no $curso em $ano.</p>';


// Constantes
define("AUTOR", "Tiago"); // tradicional, antiga
const EMPRESA = "ABC Tecnologia"; // nova, moderna

// Tiago trabalha na empresa ABC Tecnologia.
echo "<p>".AUTOR." trabalha na empresa ".EMPRESA."</p>";
?>

    <hr>

    <h2>Saída de dados simplificada/direta</h2>

    <!-- Estamos no Programador Web em 2024. -->
    <p>Estamos no <?=$curso?> em <?=$ano?>.</p>

    <!-- Tiago trabalha na empresa ABC Tecnologia -->
    <p> <?=AUTOR?> trabalha na empresa <?=EMPRESA?></p>


</div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>