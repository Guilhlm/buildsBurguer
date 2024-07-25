<?php session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <link rel="shortcut icon" href="assets/img/foto(logo)favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/CadastroProduto.css">

</head>


<body>

    <section>

        <div class="container" id="grid-principal">

            <section class="grid-1">

                <div class="fundoHeader">
                    <figure>
                        <img src="./assets/img/perfilADM.png" class="foto">
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

                        <div class="NivelConta"><?php echo ($_SESSION['nivel']); ?></div>

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

                        <section class="Fotoupdate">
                            <img src="./assets/img/inserirfoto.png" alt="" class="inserirFoto">

                        </section>

                        <section class="fomulariodeCADASTRO">
                            <div class="form">
                                <form action="#">

                                    <div class="input-group">

                                        <div class="input-box">
                                            <label for="firstname">Titulo</label>
                                            <input id="firstname" type="text" name="titulo" placeholder="Digite o Titulo">
                                        </div>

                                        <div class="input-box">
                                            <label for="lastname">Preço</label>
                                            <input id="lastname" type="int" name="preco" placeholder="Digite o preço">
                                        </div>

                                        <div class="input-box">
                                            <label for="email">Desc.</label>
                                            <input id="email" type="email" name="desc" placeholder="Digite a descrição">
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