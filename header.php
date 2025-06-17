<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name=keywords content="Açaí, Varginha, Açaí da Thay, delivery, iFood, WhatsApp, açaiteria"/>
    <title>Açaí da Thay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="_css/estilo.css">
    <link rel="shortcut icon" href="_imagens/favicon.ico" type="image/x-icon">
    <!-- Utilizando PHP para pegar os arquivos automaticamente do css para a página correspondente -->
    <?php
        $nomePaginaAtual = basename($_SERVER['PHP_SELF']);
        $nomeArquivoCss = '_css/' .str_replace('.php','.css', $nomePaginaAtual);
        if(file_exists($nomeArquivoCss)){
            echo "<link rel='stylesheet' href='$nomeArquivoCss'>";
        }
    ?>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="_imagens/Logotipo_texto.png" height="80px" alt="Logo da Loja Açaí da Thay">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav nav-fill w-100">
                        <li class="nav-item">
                            <a class="nav-link <?php if ($nomePaginaAtual == 'index.php') echo 'active'; ?>" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($nomePaginaAtual == 'produtos.php') echo 'active'; ?>" href="produtos.php">Produtos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($nomePaginaAtual == 'sobre.php') echo 'active'; ?>" href="sobre.php">Sobre Nós</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($nomePaginaAtual == 'contato.php') echo 'active'; ?>" href="contato.php">Contato</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php#Pedidos" class="btn btn-success rounded-pill btn-pedidos">Peça Agora</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>