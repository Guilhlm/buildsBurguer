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
                        <li class="select-principal">
                            <a href="menu.php">Menu</a>
                            <div class="select-opcoes">
                                <a class="option" href="./menu.php#hambs">Hamburguers</a>
                                <a class="option" href="./menu.php#combos">Combos</a>
                                <a class="option" href="./menu.php#porcoes">Porções</a>
                                <a class="option" href="./menu.php#bebidas">Bebidas</a>
                                <a class="option" href="./menu.php#sobremesa">Sobremesas</a>
                            </div>
                        </li>
                        <li><a href="sobre.php">Sobre</a></li>
                        <li><a href="produtos.php">Produtos</a></li>
                    </ul>
                </div>
                <div class="col-3">


                    <ul class="menu-icons" id="Menu-fim">

                        <div class="procurar-box">
                            <input type="text" class="procurar-texto" placeholder="Pesquisar">

                            <a href="#" class="procurar-botao">

                                <i class="bi bi-search" id="lupa"></i>
                            </a>
                        </div>

                        <li><a href="carrinho.php"><i class="bi bi-cart2"></i></a></li>

                        <label for="ChangeTheme" id="sol">
                            <input type="checkbox" id="ChangeTheme" />
                            <span> <i class="bi bi-brightness-high"></i></span>
                        </label>

                        <li><a href="login.php"><i class="bi bi-person"></i></a></li>
                    </ul>

                </div>
            </nav>
        </header>