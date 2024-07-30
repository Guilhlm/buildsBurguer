<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="shortcut icon" href="assets/img/foto(logo)favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/login.css">

    <title>Login Build's Burguer</title>
</head>

<?php

if (isset($_POST['nomeCadastro']) && !empty($_POST['nomeCadastro'])) {

    $nome = $_POST['nomeCadastro'];
    $usuario = $_POST['usuarioCadastro'];
    $senha = $_POST['senhaCadastro'];
    $Confirmar = $_POST['ConfirmarCadastro'];

    $conn = new PDO("mysql:host=62.72.62.1;dbname=u687609827_gui", "u687609827_gui", "Ou]Q||Jr^7H");


    $scriptCadastroPessoa = "INSERT INTO tb_pessoas (nome) VALUE ('{$nome}')";
    $resultadoCadastroPessoa = $conn->prepare($scriptCadastroPessoa)->execute([]);
    $pessoaID = $conn->lastInsertId();

    $scriptCadastro = "INSERT INTO tb_usuarios (nome, usuario, senha, id_pessoa) VALUE ('{$nome}', '{$usuario}', '{$senha}', '{$pessoaID}')";
    $resultadoCadastro = $conn->prepare($scriptCadastro)->execute([]);
} ?>

<body class="body-login">

    <div class="container container-login" id="box-marrom">
        <div class="form-container criar">
            <form action="#" method="POST">
                <h1>Crie sua conta</h1>

                <span>Use seu Email para registro</span>
                <input type="text" name="nomeCadastro" placeholder="Nome">
                <input type="email" name="usuarioCadastro" placeholder="Email">
                <input type="password" name="senhaCadastro" placeholder="Senha">
                <input type="password" name="ConfirmarCadastro" placeholder="Confirmar Senha">
                <input type="submit" class="botaoCriar">
            </form>
        </div>

        <?php

        if (isset($_POST['usuario']) && !empty($_POST['usuario'])) {

            $user = $_POST['usuario'];
            $password = $_POST['senha'];
            $nome = $_POST['nome'];
            $cpf = $_POST['cpf'];
            $ano_nascimento = $_POST['ano_nascimento'];
            $telefone = $_POST['telefone_1'];
            $id = $_POST['id'];

            $conn = new PDO("mysql:host=62.72.62.1;dbname=u687609827_gui", "u687609827_gui", "Ou]Q||Jr^7H");
            $script = "SELECT * FROM tb_usuarios INNER JOIN tb_pessoas ON tb_usuarios.id_pessoa = tb_pessoas.id WHERE usuario = '{$user}' AND senha = '{$password}'";
            $resultado = $conn->query($script)->fetch();

            if (!empty($resultado)) {

                session_start();

                $_SESSION["usuario"] = $user;
                $nivel = $resultado['nivel'];
                $_SESSION["nivel"] = $nivel;

                $_SESSION["fotoPerfilLogado"] = ['foto'];
                $_SESSION['id'] = $resultado['id'];
                $_SESSION['nome'] = $resultado['nome'];
                $_SESSION['cpf'] = $resultado['cpf'];
                $_SESSION['telefone_1'] = $resultado['telefone_1'];
                $_SESSION['ano_nascimento'] = $resultado['ano_nascimento'];

                header('location: editarUsuario.php');
                sleep(1);
            } else {
                $erro_login = "Usuário ou senha incorretos.";
            }
        } ?>

        <div class="form-container logar">
            <form action="#" method="POST">
                <div><a class="voltardireita" href="menu.php"><i class="bi bi-arrow-left-square"></i></a></div>
                <br>
                <h1 id="logarais">Login</h1>

                <span>Use seu Email e Senha</span>
                <input type="email" name="usuario" placeholder="Email">
                <input type="password" name="senha" placeholder="Senha">

                <?php

                if (isset($login_sucess)) {
                    echo '<div id="campo-sucess" style="color:green;">' . $login_sucess . '</div>';
                } else {
                    echo '<div id="campo-sucess"></div>';
                }

                if (isset($erro_login)) {
                    echo '<div id="campo-erro" style="color:red;">' . $erro_login . '</div>';
                } else {
                    echo '<div id="campo-erro"></div>';
                }

                ?>

                <a href="https://accounts.google.com/v3/signin/challenge/kpp" class="esqueceu">Esqueceu tua senha?</a>
                <input type="submit" class="botaoLogar" value="Logar"></input>
            </form>
        </div>

        <div class="alternar-container">
            <div class="alternar">
                <div class="alternar-panel alternar-esquerda">
                    <h1>Entrar com a sua conta</h1>
                    <p>Entre agora com uma conta já existente</p>
                    <button class="botao" id="logar">Entrar</button>
                </div>
                <div class="alternar-panel alternar-direita">
                    <h1>Eai, já possui sua conta?</h1>
                    <p>Registre-se agora com sua conta pessoal, ou crie uma!</p>
                    <button class="botao" id="registrar">Criar agora</button>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/script/login.js"></script>

</body>

</html>