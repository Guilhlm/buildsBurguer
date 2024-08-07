<?php


require './classe/Produto.php';
session_start();

$produto = new Produto();
$dados = $produto->CadastroProduto();

if (!isset($_SESSION['usuario']) || $_SESSION['nivel'] != "admin"){

    header("location: login.php");

} ?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Build's Burguer</title>
    <link rel="shortcut icon" href="assets/img/foto(logo)favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/CadastroProduto.css">

</head>

<body>
    <section>
        <div class="container" id="grid-principal">

            <section class="grid-1">

                <div class="fundoHeader">

                    <figure>
                        <img src="<?php echo (isset($_SESSION['usuario']) && $_SESSION['nivel'] == 'admin') ? './assets/img/perfil/perfilADM.png' : './assets/img/Perfil/perfilUser.png'; ?>" class="foto">
                    </figure>

                    <div>
                        <h1 class="nomePessoa"><?php echo $_SESSION['nome']; ?></h1>
                        <p class="emailPessoa"><?php echo $_SESSION['usuario']; ?></p>
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
                        <p>NOME: <?php echo $_SESSION['nome']; ?></p>
                        <p>ANO NASCIMENTO: <?php echo $_SESSION['ano_nascimento']; ?></p>
                        <p>CPF: <?php echo $_SESSION['cpf']; ?></p>
                        <p>TELEFONE: <?php echo $_SESSION['telefone_1']; ?></p>
                        <p>EMAIL PRINCIPAL: <?php echo $_SESSION['usuario']; ?></p>
                    </section>

                </div>

            </section>

            <div class="grid-3">
                <div class="ColUpdate">
                    <h2 class="tituloForm">Cadastrar Novo Produto</h2>
                    <div class="secaoForm">

                        <section class="fomulariodeCADASTRO">

                            <div class="form">

                                <form action="CadastroProduto.php" method="POST" class="improviso" enctype="multipart/form-data" onsubmit="resetImage()" id="form">

                                    <section class="Fotoupdate">

                                        <img id="imagemPreview" src="./assets/img/perfil/inserirfoto.png" alt="foto upload" class="inserirFoto">
                                        <input id="imagem" type="file" name="imagem" accept="image/png, image/jpeg" onchange="previewImage(event)" required>>

                                    </section>

                                    <div class="input-group">

                                        <div class="input-box">

                                            <label for="titulo">Titulo Pd.</label>
                                            <input id="titulo" type="text" name="titulo" placeholder="Digite o Titulo" maxlength="15" class="required" oninput="validarTitulo()" required>


                                        </div>
                                        <span class="span-required">Numero nao é permitido</span>

                                        <div class="input-box">

                                            <label for="preco">Preço R$.</label>
                                            <input id="preco" type="text" step="0.01" name="preco" placeholder="Digite o preço" maxlength="7" class="required" oninput="validarPreco()" required>

                                        </div>
                                        <span class="span-required">Letra nao é permitido</span>

                                        <div class="input-box">

                                            <label for="categoria">Categoria</label>

                                            <select id="categoria" name="categoria" class="checkCategoria required" oninput="validarCategoria()" required>
                                                <option value="">Selecione uma categoria</option>
                                                <option value="1">Lanche</option>
                                                <option value="2">Combo</option>
                                                <option value="3">Acompanhamento</option>
                                                <option value="4">Bebidas</option>
                                                <option value="5">Doces</option>
                                            </select>

                                        </div>
                                        <span class="span-required">Categoria invalida</span>

                                        <div class="input-box">

                                            <label for="descricao">Descrição</label>
                                            <input id="descricao" type="text" name="descricao" placeholder="Digite a descrição" maxlength="255" class="required" oninput="validarDesc()" required>

                                        </div>
                                        <span class="span-required">Numero nao é permitido</span>

                                        <div class="form-submit-btn">

                                            <button class="continue-button" type="submit">Cadastrar</button>
                                            
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="./assets/script/fotoProduto.js"></script>
</body>

</html>