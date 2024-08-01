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


<body class="body-login">

    <!-- //////////////////////// Criar ///////////////////////////// -->

    <div class="container container-login" id="box-marrom">
        <div class="form-container criar">
            <form action="#" method="POST">
                <h1>Crie sua conta</h1>

                <?php

                require './classe/Usuario.php';
                $Usuario = new Usuario();
                $cadastrar = $Usuario->CadastroUser();

                ?>

                <span>Use seu Email para registro</span>
                <input type="text" name="nomeCadastro" placeholder="Nome">
                <input type="email" name="usuarioCadastro" placeholder="Email">
                <input type="password" name="senhaCadastro" placeholder="Senha">
                <input type="password" name="ConfirmarCadastro" placeholder="Confirmar Senha">
                <input type="submit" class="botaoCriar">
            </form>
        </div>

        <!-- //////////////////////// Criar ///////////////////////////// -->



        <!-- //////////////////////// logar ///////////////////////////// -->

        <div class="form-container logar">
            <form action="#" method="POST">
                <div><a class="voltardireita" href="menu.php"><i class="bi bi-arrow-left-square"></i></a></div>
                <br>
                <h1 id="logarais">Login</h1>

                <?php

                $Usuario->LoginUser();

                ?>

                <span>Use seu Email e Senha</span>
                <input type="email" name="usuario" placeholder="Email">
                <input type="password" name="senha" placeholder="Senha">

                <a href="https://accounts.google.com/v3/signin/challenge/kpp" class="esqueceu">Esqueceu tua senha?</a>
                <input type="submit" class="botaoLogar" value="Logar"></input>
            </form>
        </div>

        <!-- //////////////////////// logar ///////////////////////////// -->


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