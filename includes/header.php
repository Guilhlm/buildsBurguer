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

                    <figure><a href="menu.php"><img class="logo" src="assets/img/foto(logo).png" alt="logo da empresa"></a></figure>
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

                        <label class="containerTema" for="ChangeTheme">
                            <input type="checkbox" id="ChangeTheme" />
                            <div class="checkmark">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon No" width="16" height="16" fill="currentColor" class="bi bi-moon" viewBox="0 0 16 16">
                                    <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278M4.858 1.311A7.27 7.27 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.32 7.32 0 0 0 5.205-2.162q-.506.063-1.029.063c-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon Yes" width="16" height="16" fill="currentColor" class="bi bi-brightness-high" viewBox="0 0 16 16">
                                    <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6m0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0m9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708" />
                                </svg>
                            </div>
                        </label>

                        <?php echo (isset($_SESSION['usuario'])) ? '' : '<li><a href="login.php"><i class="bi bi-person"></i></a></li>' ?>

                        <?php echo (isset($_SESSION['usuario'])) ? '<button class="menu-icons" id="AcionarNavbar" onclick="toggleSidebar()">☰</button>' : '' ?>


                        <div class="sidebar" id="sidebar">

                            <section class="xizinhoNav">
                                <button class="fecharnav" onclick="fechar()">X</button>
                            </section>

                            <section class="SectionFotoNome">

                                <?php echo (isset($_SESSION['usuario']) && $_SESSION['nivel'] == "admin")
                                    ? '<img class="imagemPerfil" src="./assets/img/perfil/perfilADM.png" width="150px">'
                                    : '<img class="imagemPerfil" src="./assets/img/perfil/perfilUser.png" width="150px">' ?>

                                <h2 class="nomeLogin">

                                    <?php
                                    if (isset($_SESSION["usuario"]) && $_SESSION["usuario"] !== "") {

                                        echo ($_SESSION['nome']); ?>

                                    <?php
                                    }
                                    ?>
                                </h2>

                                <?php echo (isset($_SESSION['usuario']) && $_SESSION['nivel'] == "admin") ? '<a class="nav-link red" href="logout.php">Logout</a>' : '' ?>

                            </section>
                            <ul>

                                <?php echo (isset($_SESSION['usuario']) && $_SESSION['nivel'] == "admin") ? '<br><h1 class="navTopicos">Edições</h1>' : '' ?>
                                <?php echo (isset($_SESSION['usuario'])) ? '<a class="nav-link" href="editarUsuario.php">Editar Usuario</a>' : '' ?>
                                <?php echo (isset($_SESSION['usuario']) && $_SESSION['nivel'] == "admin")
                                    ? '<a class="nav-link" href="ListagemProdutos.php">Editar Todos Produtos</a>'
                                    : '' ?>
                                <?php echo (isset($_SESSION['usuario']) && $_SESSION['nivel'] == "admin")
                                    ? '<a class="nav-link" href="ListagemUsers.php">Editar todos Usuarios</a>'
                                    : '' ?>
                                <?php echo (isset($_SESSION['usuario']) && $_SESSION['nivel'] == "")
                                    ? '<a class="nav-link red" href="logout.php">Logout</a>'
                                    : '' ?>

                                <br><br>

                                <?php echo (isset($_SESSION['usuario']) && $_SESSION['nivel'] == "admin")
                                    ? '<h1 class="navTopicos">Cadastros</h1>'
                                    : '' ?>
                                <?php echo (isset($_SESSION['usuario']) && $_SESSION['nivel'] == "admin")
                                    ? '<a class="nav-link" href="CadastroADM.php">Cadastrar Administrador</a>'
                                    : '' ?>
                                <?php echo (isset($_SESSION['usuario']) && $_SESSION['nivel'] == "admin")
                                    ? '<a class="nav-link" href="CadastroProduto.php">Cadastrar um novo Produto</a>'
                                    : '' ?>

                            </ul>

                        </div>
                        <script src="assets/script/navbar.js"></script>

                    </ul>
                </div>
            </nav>
        </header>