<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>

    <link rel="shortcut icon" href="assets/img/foto(logo)favicon.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="stylesheet" href="assets/css/carrossel.css">
    <link rel="stylesheet" href="assets/css/sobre.css">
    <link rel="stylesheet" href="assets/css/carrinho.css">
    <link rel="stylesheet" href="assets/css/click-produto.css">
    <link rel="stylesheet" href="assets/css/filtro.css">
</head>

<body>
    <main>
        <header>
            <nav class="cabeçalho container">
                <div class="col-3" id="Menu-Comeco">

                    <figure><img class="logo" src="assets/img/foto(logo).png" alt="logo da empresa"></figure>
                </div>
                <div class="col-6" id="Menu-meio">

                    <ul class="menu">

                        <li><a href="index.html">Inicio</a></li>
                        <li class="select-principal"><a href="menu.php">Cardapio</a></li>
                        <li><a href="sobre.php">Sobre</a></li>
                    </ul>
                </div>
                <div class="col-3">

                    <ul class="menu-icons" id="Menu-fim">

                        <form action="filtro.php" method="post">
                            <div class="procurar-box">

                                <input type="text" class="procurar-texto" placeholder="Pesquisar" name="buscar">

                                <a href="#" class="procurar-botao">

                                    <button id="lupa" type="submit"><i class="bi bi-search" id="lupa"></i></button>
                                </a>

                            </div>
                        </form>

                        <li><a href="carrinho.php"><i class="bi bi-cart2"></i></a></li>

                        <label for="ChangeTheme" id="sol">
                            <input type="checkbox" id="ChangeTheme" />
                            <span> <i class="bi bi-brightness-high"></i></span>
                        </label>

                        <?php echo (isset($_SESSION['usuario'])) ? '' : '<li><a href="login.php"><i class="bi bi-person"></i></a></li>' ?>

                        <?php echo (isset($_SESSION['usuario'])) ? '<button class="menu-icons" id="AcionarNavbar" onclick="toggleSidebar()">☰</button>' : '' ?>


                        <div class="sidebar" id="sidebar">

                            <section class="xizinhoNav">
                                <button class="fecharnav" onclick="fechar()">X</button>
                            </section>

                            <section class="SectionFotoNome">
                                <!-- <img class="imagemPerfil" src="img/<?php echo $_SESSION['fotoPerfilLogado']; ?>"> -->
                                <img class="imagemPerfil" src="https://picsum.photos/seed/picsum/100/100" alt="">

                                <h2 class="nomeLogin">

                                    <?php
                                    if (isset($_SESSION["usuario"]) && $_SESSION["usuario"] !== "") {


                                        echo ($_SESSION['usuario']); ?>

                                    <?php
                                    }
                                    ?>
                                </h2>

                            </section>

                            <ul>
                                <?php echo (isset($_SESSION['usuario'])) ? '<a class="nav-link" href="#">Editar Usuario</a>' : '' ?>
                                <?php echo (isset($_SESSION['usuario']) && $_SESSION['nivel'] == "admin") ? '<a class="nav-link" href="#">Cadastrar ADM</a>' : '' ?>
                                <?php echo (isset($_SESSION['usuario']) && $_SESSION['nivel'] == "admin") ? '<a class="nav-link" href="#">Cadastrar Produto</a>' : '' ?>
                                <?php echo (isset($_SESSION['usuario'])) ? '<a class="nav-link red" href="logout.php">Logout</a>' : '' ?>

                            </ul>

                        </div>
                        <script src="assets/script/navbar.js"></script>

                    </ul>
                </div>
            </nav>
        </header>