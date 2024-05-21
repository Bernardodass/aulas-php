<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($tituloPagina) ? $tituloPagina : 'Site'; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Site Exemplo</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="equipe.php">Equipe</a>
            <a href="portfolio.php">Portfólio</a>
            <a href="servicos.php">Serviços</a>
        </nav>
    </header>

    <main class="container shadow-lg p-3">
        <article>
