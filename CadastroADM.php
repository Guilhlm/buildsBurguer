<?php
session_start();

if (isset($_SESSION['nivel']) && !empty($_SESSION['nivel']) && isset($_POST) && !empty($_POST)) {

    try {

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $nivel = $_POST['nivel'];

        $conn = new PDO("mysql:host=62.72.62.1;dbname=u687609827_gui", "u687609827_gui", "Ou]Q||Jr^7H");
        $scriptCadastroPessoinha = "INSERT INTO tb_pessoas (nome) VALUE ('{$nome}')";
        $resultadoCadastroADM = $conn->prepare($scriptCadastroPessoinha)->execute([]);
        $pessoaID = $conn->lastInsertId();

        $scriptCadastroADM = "INSERT INTO tb_usuarios (nome, usuario, senha, id_pessoa, nivel) VALUE ('{$nome}', '{$email}', '{$senha}', '{$pessoaID}', '{$nivel}')";
        $resultadoCadastro = $conn->prepare($scriptCadastroADM)->execute([]);

        echo "<script>alert('ADMIN cadastrado');</script>";
    } catch (PDOException) {
        echo "<script>alert('seguinte deu uma coisa no treco');</script>";
    }
}
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
                    <h2 class="tituloForm">Cadastrar Novo Administrador</h2>

                    <div class="secaoForm">

                        <section class="fomulariodeCADASTRO">

                            <div class="container">
                                <form action="CadastroADM.php" method="POST">
                                    <div class="main-user-info">

                                        <div class="user-input-box">
                                            <label for="firstname">Nome</label>
                                            <input id="nome" type="text" name="nome" placeholder="Digite seu nome" maxlength="20" required>
                                        </div>

                                        <div class="user-input-box">
                                            <label for="email">E-mail</label>
                                            <input id="email" type="email" name="email" placeholder="exemplo@gmail.com" maxlength="30" required>
                                        </div>

                                        <div class="user-input-box">
                                            <label for="confirmPassword">Senha</label>
                                            <input id="senha" type="password" name="senha" placeholder="Digite sua senha" minlength="4" title="A senha deve ter pelo menos 8 caracteres e incluir letra maiúscula, letra minúscula, número e caractere especial." required>
                                        </div>

                                        <?php echo (isset($_SESSION['usuario']) && $_SESSION['nivel'] == "admin") ?

                                            '<div class="user-input-box">
                                                <label for="password">Nivel</label>
                                                <input id="nivel" type="text" name="nivel" value="admin">
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

</body>

</html>