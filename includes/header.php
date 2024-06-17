<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="assets/css/menu.css">
    <link rel="stylesheet" href="assets/css/carrossel.css">
    <link rel="stylesheet" href="assets/css/carrinho.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/sobre.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <main>
        <header>
            <nav class="cabeçalho">
                <a>
                    <figure><img class="logo" src="assets/img/foto(logo).png" alt="logo da empresa"></figure>
                </a>
                <ul class="menu">
                    <li><a href="index.html">Inicio</a></li>
                    <li class="select-principal">
                        <a href="menu.html">Menu</a>
                        <div class="select-opcoes">
                            <a class="option" href="./menu.html#hambs">Hamburguers</a>
                            <a class="option" href="./menu.html#combos">Combos</a>
                            <a class="option" href="./menu.html#porcoes">Porções</a>
                            <a class="option" href="./menu.html#bebidas">Bebidas</a>
                            <a class="option" href="./menu.html#sobremesa">Sobremesas</a>
                        </div>
                    </li>
                    <li><a href="sobre.html">Sobre</a></li>
                </ul>

                <ul class="menu-icons">
                    <li><a href="carrinho.html"><i class="bi bi-cart2"></i></a></li>

                    <label for="ChangeTheme" id="sol">
                        <input type="checkbox" id="ChangeTheme" />
                        <span> <i class="bi bi-brightness-high"></i></span>
                    </label>

                    <li><a href="login.html"><i class="bi bi-person"></i></a></li>
                </ul>
            </nav>
        </header>