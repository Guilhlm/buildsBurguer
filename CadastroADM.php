<?php



require './classe/Usuario.php';
session_start();

$adm = new Usuario();
$dados = $adm->CadastroADM();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="styles.css">

    <link rel="shortcut icon" href="assets/img/foto(logo)favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/CadastroADM.css">

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

                        <div class="NivelConta"><?php echo $_SESSION['nivel']; ?></div>

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
                    <h2 class="tituloForm">Cadastrar Novo Administrador</h2>

                    <div class="secaoForm">

                        <section class="fomulariodeCADASTRO">

                            <div class="container">
                                <form action="CadastroADM.php" method="POST" id="form">
                                    <div class="main-user-info">

                                        <div class="user-input-box">
                                            <label for="firstname">Nome</label>
                                            <input id="nome" type="text" name="nome" placeholder="Digite seu nome" maxlength="20" class="required" oninput="validarNome()" required>
                                            <span class="span-required">Nome deve ter no minimo 3 Caracteres</span>
                                        </div>

                                        <div class="user-input-box">
                                            <label for="email">E-mail</label>
                                            <input id="email" type="email" name="email" placeholder="exemplo@gmail.com" maxlength="30" class="required" oninput="validarEmail()" required>
                                            <span class="span-required">Email invalido</span>
                                        </div>

                                        <div class="user-input-box">
                                            <label for="confirmPassword">Senha</label>
                                            <input id="senha" type="password" name="senha" placeholder="Digite sua senha" minlength="4" class="required" oninput="validarSenha()" required>
                                            <span class="span-required">Senha deve ter no minimo 5 Caracteres</span>
                                        </div>

                                        <?php echo (isset($_SESSION['usuario']) && $_SESSION['nivel'] == "admin") ?

                                            '<div class="user-input-box">
                                                <label for="password">Nivel</label>
                                                <input id="nivel" type="text" name="nivel" value="admin" readonly>
                                             </div>'

                                            : '' ?>
                                    </div>

                                    <div class="form-submit-btn">
                                        <button class="continue-button" type="submit">Cadastrar</button>
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

    <script src="assets/script/validarADM.js"></script>
</body>

</html>