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
                    <?php echo (isset($_SESSION['usuario']) && $_SESSION['nivel'] == "admin") ? '<img class="imagemPerfil" src="./assets/img/perfilADM.png" width="150px">' : '<img class="imagemPerfil" src="./assets/img/perfilUser.png" width="150px">' ?>
                </figure>
            </div>
        </section>

        <section class="work_skills card">
            <div class="work">

                <span class="nivelConta"> <?php echo (isset($_SESSION['usuario']) && $_SESSION['nivel'] == "admin") ? 'Admin' : 'Cliente' ?> </span>

                <h1 class="heading">Informações Pessoais</h1><br>
                <div class="primary">

                    <p style="text-transform: uppercase;">Nome: <?php echo ($_SESSION['nome']); ?></p>
                    <p>Ano Nasc: <?php echo ($_SESSION['ano_nascimento']); ?></p>
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
                    <form action="UpdteUsuario.php?id=<?= $resultado['id'] ?>">

                        <div class="input-group">

                            <div class="input-box">
                                <label for="firstname">Nome</label>
                                <input id="firstname" type="text" name="nome" placeholder="Digite seu nome" value="<?= $_SESSION['nome'] ?>">
                            </div>

                            <div class="input-box">
                                <label for="lastname">Ano Nascimento</label>
                                <input id="lastname" type="int" name="data" value="<?= $_SESSION['ano_nascimento'] ?>">
                            </div>

                            <div class="input-box">
                                <label for="email">E-mail</label>
                                <input id="email" type="email" name="email" placeholder="exemplo@gmail.com" value="<?= $_SESSION['usuario'] ?>">
                            </div>

                            <div class="input-box">
                                <label for="number">Telefone</label>
                                <input id="number" type="tel" name="telefone" placeholder="(xx) xxxx-xxxx" value="<?= $_SESSION['telefone_1'] ?>">
                            </div>

                            <div class="input-box">
                                <label for="password">Cpf</label>
                                <input id="password" type="text" name="cpf" placeholder="000.000.000.00" value=" <?= $_SESSION['cpf'] ?>">
                            </div>

                            <div class="input-box">
                                <label for="confirmPassword">Senha</label>
                                <input id="confirmPassword" type="password" name="confirmPassword" placeholder="Digite sua senha" >
                            </div>

                            <?php echo (isset($_SESSION['usuario']) && $_SESSION['nivel'] == "admin") ?

                                '<div class="input-box">
                                <label for="confirmPassword">Nivel</label>
                                <input id="confirmPassword" type="text" name="confirmPassword " placeholder="admin ou vazio">
                            </div>'

                                : '' ?>
                        </div>


                        <button class="continue-button" type="submit" value="Confirmar Alterações">Confirmar alterações</button>

                    </form>
                </div>  
        </section>
    </div>

</body>

</html>


