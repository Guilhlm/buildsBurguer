<?php session_start(); ?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="styles.css">

    <link rel="shortcut icon" href="assets/img/foto(logo)favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/perfil.css">

</head>


<body>

    <section>

        <div class="container" id="grid-principal">

            <section class="grid-1">

                <div class="fundoHeader">
                    <figure>
                        <img src="<?php echo (isset($_SESSION['usuario']) && $_SESSION['nivel'] == "admin") ? './assets/img/Perfil/perfilADM.png' : './assets/img/Perfil/perfilUser.png' ?>" class="foto">
                    </figure>

                    <div>
                        <h1 class="nomePessoa"><?php echo ($_SESSION['nome']); ?></h1>
                        <p class="emailPessoa"><?php echo ($_SESSION['usuario']); ?></p>
                    </div>
                </div>

                <div class="fechar">
                    <h1 class="fecharPagina"><a href="menu.php">X</a></h1>
                </div>

            </section>

            <section class="grid-2">

                <div class="informacoesPessoais">

                    <section class="headerInfos">
                        <p class="tituloInfos">INFORMAÇÕES PESSOAIS</p>

                        <div class="NivelConta"><?php echo (isset($_SESSION['usuario']) && $_SESSION['nivel'] == "admin") ? 'Admin' : 'Cliente' ?></div>

                    </section>

                    <section class="informacoes">

                        <p>NOME: <?php echo ($_SESSION['nome']); ?></p>
                        <p>ANO NASCIMENTO: <?php echo ($_SESSION['ano_nascimento']); ?></p>
                        <p>CPF: <?php echo ($_SESSION['cpf']); ?></p>
                        <p>TELEFONE: <?php echo ($_SESSION['telefone_1']); ?></p>
                        <p>EMAIL PRINCIPAL: <?php echo ($_SESSION['usuario']); ?></p>

                    </section>
                </div>

            </section>

            <div class="grid-3">
                <div class="ColUpdate">
                    <h2 class="tituloForm">Cadastrar Novo Produto</h2>

                    <div class="secaoForm">

                        <section class="fomulariodeCADASTRO">
                            <div class="form">
                                <form action="#">

                                    <div class="input-group">

                                        <div class="input-box">
                                            <label for="firstname">Nome</label>
                                            <input id="firstname" type="text" name="nome" placeholder="Digite seu nome" value="<?php echo ($_SESSION['nome']); ?>">
                                        </div>

                                        <div class="input-box">
                                            <label for="lastname">Ano Nascimento</label>
                                            <input id="lastname" type="int" name="data" value="<?php echo ($_SESSION['ano_nascimento']); ?>">
                                        </div>

                                        <div class="input-box">
                                            <label for="email">E-mail</label>
                                            <input id="email" type="email" name="email" placeholder="exemplo@gmail.com" value="<?php echo ($_SESSION['usuario']); ?>">
                                        </div>

                                        <div class="input-box">
                                            <label for="number">Telefone</label>
                                            <input id="number" type="tel" name="telefone" placeholder="(xx) xxxx-xxxx" value="<?php echo ($_SESSION['telefone_1']); ?>">
                                        </div>

                                        <div class="input-box">
                                            <label for="password">Cpf</label>
                                            <input id="password" type="text" name="cpf" placeholder="000.000.000.00" value="<?php echo ($_SESSION['cpf']); ?>">
                                        </div>

                                        <div class="input-box">
                                            <label for="confirmPassword">Senha</label>
                                            <input id="confirmPassword" type="password" name="confirmPassword" placeholder="Digite sua senha">
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

                </div>

            </div>

        </div>
    </section>
    </div>

</body>

</html>