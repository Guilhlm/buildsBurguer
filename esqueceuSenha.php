<?php
require './classe/Usuario.php';
session_start();

$senha = new Usuario();
$senha->AtualizarSenha();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Build's Burguer</title>
    <link rel="shortcut icon" href="assets/img/foto(logo)favicon.png" type="image/x-icon">
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
                            <label for="cpf">CPF</label>
                            <input class="required" id="cpf" type="text" name="cpf" placeholder="000.000.000-00" minlength="14" oninput="validarCpf()" maxlength="14" required pattern="\d{3}\.\d{3}\.\d{3}-\d{2}">
                            <span class="span-required">CPF inválido</span>
                        </div>

                        <div class="textfiled">
                            <label for="usuario">Email</label>
                            <input class="required" type="text" id="usuario" name="usuario" placeholder="exmplo@gmail.com" oninput="validarEmail()" required>
                            <span class="span-required">Email inválido</span>

                            <label for="senha">Senha Nova</label>
                            <input class="required" type="password" id="senha" name="senha" placeholder="Digite sua nova senha" oninput="validarSenha()" required>
                            <span class="span-required">Senha muito pequena</span>
                        </div>

                        <button class="botao-login" type="submit">Atualizar Senha</button>
                    </form>

                </div>
            </div>
        </main>
    </div>


    <script src="assets/script/redefinirSenha.js"></script>
</body>

</html>