<?php include "recursos.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMPRESA</title>
<!-- CSS -->
<!-- <style>
body {color: #4dffff}
</style> -->
</head>
<body>
    <h1>Experiências com PHP</h1>
   


    <!-- delimitadores de abertura/fechamento PHP -->
    <?php
    echo "Olá";
    echo "<p>Senac Penha é daora</p>";
    echo "<p style=\"text-align:center\">Senac Penha é daora</p>";
    ?>
    <!-- delimitadores de abertura/fechamento PHP -->

    <hr>
    <h2>Técnologias trabalhadas</h2>
<?php
foreach($tecnologias as $tecnologia) {
?>  
<p> <?=$tecnologia?> </p>  
<?php
}
?>
</body>
</html>