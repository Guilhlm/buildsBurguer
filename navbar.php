

<div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">

            <img src="img/<?php echo $_SESSION['fotoPerfilLogado']; ?>" class="rounded-circle TESTANDO" height="60" alt="Black and White Portrait of a Man" loading="lazy" style="margin-right: 15px;" />
        </h5>
        <?php

        if (isset($_SESSION["usuario"]) && $_SESSION["usuario"] !== "") {

            echo $_SESSION["usuario"]; ?>

        <?php
        }
        ?>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>

            <li class="nav-item">

                <a class="nav-link" href="login.php">Logar Usuário</a>

            </li>

            <li class="nav-item">

                <?php echo (isset($_SESSION['usuario'])) ? '<a class="nav-link" href="login.php">Cadastrar Administrador</a>' : '' ?>

            </li>

            <li class="nav-item">

                <?php echo (isset($_SESSION['usuario'])) ? '<a class="nav-link" href="login.php">Cadastrar Produto</a>' : '' ?>

            </li>

            <li class="nav-item">

                <?php echo (isset($_SESSION['usuario'])) ? '<a class="nav-link" href="logout.php">Logout</a>' : '' ?>

            </li>

    </div>
</div>