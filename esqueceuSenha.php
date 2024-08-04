<?php
require './classe/Usuario.php';
session_start();

$senha = new Usuario();
$senha->AtualizarSenha();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resetar Senha</title>
    <link rel="stylesheet" href="assets/css/esqueceuSenha.css">
</head>

<body>
    <div class="main-login">
        <main class="ideia">

            <div class="esquerdo-login">
                <img src="./assets/img/senhaanimation.svg" alt="recuperar senha" class="imagem">
            </div>

            <div class="direito-login">

                <div class="card-login">

                    <div class="voltar">
                        <a href="login.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
                            </svg>
                        </a>
                    </div>

                    <h1>Resetar Senha</h1>

                    <form action="esqueceuSenha.php" method="POST" id="form" class="form-reset">

                        <div class="textfiled">
                            <label for="nome">Nome</label>
                            <input type="text" id="nome" name="nome" placeholder="Digite seu Nome" maxlength="12" required>
                        </div>

                        <div class="textfiled">
                            <label for="usuario">Email</label>
                            <input type="text" id="usuario" name="usuario" placeholder="Digite seu Email" required>
                            <label for="senha">Senha Nova</label>
                            <input type="password" id="senha" name="senha" placeholder="Digite sua nova senha" required>
                        </div>

                        <button class="botao-login" type="submit">Atualizar Senha</button>
                    </form>
                    
                </div>
            </div>
        </main>
    </div>
</body>

</html>