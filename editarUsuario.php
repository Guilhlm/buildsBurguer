<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <link rel="shortcut icon" href="assets/img/foto(logo)favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/perfil.css">

</head>


<body>

    <div class="container containereditar">
        <section class="userProfile card">
            <div class="profile">
                <figure>
                    <img src="https://picsum.photos/250/250" alt="profile" width="50px" height="25px">
                </figure>
            </div>
        </section>

        <section class="work_skills card">
            <div class="work">

                <span class="nivelConta"> <?php echo (isset($_SESSION['usuario']) && $_SESSION['nivel'] == "admin") ? 'Admin' : 'Cliente' ?> </span>

                <h1 class="heading">Informações Pessoais</h1><br>
                <div class="primary">

                    <p>Nome: <?php echo ($_SESSION['nome']); ?></p>
                    <p>Data Nasc: <?php echo ($_SESSION['ano_nascimento']); ?></p>
                    <p>Cpf: <?php echo ($_SESSION['cpf']); ?></p>
                    <p>Telefone: <?php echo ($_SESSION['telefone_1']); ?></p>

                </div>
            </div>
        </section>

        <section class="userDetails card">

            <div class="userName">
                <p class="fecharPerfil">
                    <a href="menu.php">X</a>
                </p>

                <h1 class="name"><?php echo ($_SESSION['nome']); ?></h1>
                <p><?php echo ($_SESSION['usuario']); ?></p>

            </div>

        </section>

        <section class="timeline_about card">
            <div class="tabs">
                <ul>
                    <li class="about active">
                        <i class="ri-user-3-fill ri"></i>
                        <span>Editar Informações</span>
                    </li>
                </ul>
                <div class="form">
                    <form action="#">

                        <div class="input-group">

                            <div class="input-box">
                                <label for="firstname">Nome</label>
                                <input id="firstname" type="text" name="nome" placeholder="Digite seu nome" required>
                            </div>

                            <div class="input-box">
                                <label for="lastname">Data Nascimento</label>
                                <input id="lastname" type="date" name="data" placeholder="Digite sua Data de nascimento" required>
                            </div>

                            <div class="input-box">
                                <label for="email">E-mail</label>
                                <input id="email" type="email" name="email" placeholder="Digite seu e-mail" required>
                            </div>

                            <div class="input-box">
                                <label for="number">Telefone</label>
                                <input id="number" type="tel" name="telefone" placeholder="(xx) xxxx-xxxx" required>
                            </div>

                            <div class="input-box">
                                <label for="password">Cpf</label>
                                <input id="password" type="number" name="password" placeholder="Digite seu CPF" required>
                            </div>

                            <div class="input-box">
                                <label for="confirmPassword">Senha</label>
                                <input id="confirmPassword" type="password" name="confirmPassword" placeholder="Digite sua senha" required>
                            </div>

                            <div class="input-box">
                                <label for="confirmPassword">Nivel</label>
                                <input id="confirmPassword" type="password" name="confirmPassword" placeholder="admin ou null" required>
                            </div>

                        </div>

                        <div class="continue-button">
                            <button><a href="#">Salvar</a> </button>
                        </div>

                    </form>
                </div>
        </section>
    </div>

</body>

</html>