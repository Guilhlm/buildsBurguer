<?php

require './classe/Usuario.php';
session_start();

$user = new Usuario();
$dados = $user->AtualizarUsuario();

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Build's Burguer</title>
    <link rel="stylesheet" href="styles.css">

    <link rel="shortcut icon" href="assets/img/foto(logo)favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/editarUsuario.css">

</head>


<body>

    <section>

        <div class="container" id="grid-principal">

            <section class="grid-1">

                <div class="fundoHeader">
                    <figure>
                        <img src="<?php echo (isset($_SESSION['usuario']) && $_SESSION['nivel'] == "admin") ? './assets/img/perfil/perfilADM.png' : './assets/img/perfil/perfilUser.png' ?>" class="foto">
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
                    <h2 class="tituloForm">Editar Informações Pessoais</h2>

                    <div class="secaoForm">

                        <section class="fomulariodeCADASTRO">

                            <div class="container">

                                <form action="editarUsuario.php" method="POST" id="form">
                                    <div class="main-user-info">

                                        <input type="hidden" name="id" value="<?php echo ($_SESSION['id']); ?>">

                                        <div class="user-input-box">
                                            <label for="firstname">Nome</label>
                                            <input class="required" id="nome" type="text" name="nome" placeholder="Digite seu nome" value="<?php echo ($_SESSION['nome']); ?>" maxlength="12" oninput="validarNome()">
                                            <span class="span-required">Nome deve ter no minimo 3 Caracteres</span>
                                        </div>

                                        <div class="user-input-box">
                                            <label for="telefone">Telefone</label>
                                            <input class="required" id="telefone" type="text" name="telefone_1" placeholder="00-00000-0000" value="<?php echo ($_SESSION['telefone_1']); ?>" oninput="validarTelefone()" maxlength="14" required pattern="\d{2}-\d{5}-\d{4}">
                                            <span class="span-required">Número de telefone inválido</span>
                                        </div>

                                        <div class="user-input-box">
                                            <label for="cpf">Cpf</label>
                                            <input class="required" id="cpf" type="text" name="cpf" placeholder="000.000.000-00" value="<?php echo ($_SESSION['cpf']); ?>" minlength="14" oninput="validarCpf()" maxlength="14" required pattern="\d{3}\.\d{3}\.\d{3}-\d{2}">
                                            <span class="span-required">CPF inválido</span>
                                        </div>

                                        <div class="user-input-box">
                                            <label for="ano_nascimento">Ano Nascimento</label>
                                            <input class="required" id="ano_nascimento" type="text" name="ano_nascimento" placeholder="Digite o ano" value="<?php echo ($_SESSION['ano_nascimento']); ?>" oninput="validarAno()" maxlength="4" required pattern="\d{4}">
                                            <span class="span-required">Ano de nascimento inválido</span>
                                        </div>


                                    </div>

                                    <div class="form-submit-btn">
                                        <button class="continue-button" type="submit">Confirmar alterações</button>
                                    </div>

                                </form>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>

    <script src="assets/script/editarUsuario.js"></script>

</body>

</html>