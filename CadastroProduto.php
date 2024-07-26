<?php session_start(); ?>

<?php

if (isset($_SESSION['nivel']) && !empty($_SESSION['nivel']) && isset($_POST) && !empty($_POST)) {

    $titulo = $_POST['titulo'];
    $preco = $_POST['preco'];
    // $imagem = $_POST['imagem'];
    $categoria = $_POST['categoria'];
    $descricao = $_POST['descricao'];

    $conn = new PDO("mysql:host=62.72.62.1;dbname=u687609827_gui", "u687609827_gui", "Ou]Q||Jr^7H");
    $scriptCadastroLanche = "INSERT INTO tb_produtos (titulo, preco, categoria, descricao) VALUE ('{$titulo}', {$preco}, {$categoria}, '{$descricao}')";

    $resultadoCadastro = $conn->query($scriptCadastroLanche)->fetch();
    return $resultadoCadastro;
} ?>

<!-- ///////////////////////////////////////////// -->
<?php


$foto = $_FILES["foto"];
echo "Foto do usuario: " . $foto['name'] . "<br>";

$nomeCaminho = "img/" . round(microtime(true)) . $foto['name'];
move_uploaded_file($foto['tmp_name'], $nomeCaminho);

$conn = new PDO("mysql:host=62.72.62.1;dbname=u687609827_gui", "u687609827_gui", "Ou]Q||Jr^7H");
$script = "INSERT INTO dados(nome, foto) VALUES ('$nome','$nomeCaminho')";

$resultado = $conn->query($script)->fetch();
return $resultado;

?>

<!-- ///////////////////////////////////////////// -->

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

                        <section class="fomulariodeCADASTRO">
                            <div class="form">

                                <form action="CadastroProduto.php" method="POST" class="improviso" enctype="multipart/form-data">

                                    <section class="Fotoupdate">

                                        <img src="./assets/img/perfil/inserirfoto.png" alt="foto upload" class="inserirFoto">
                                        <input name="foto" id="foto" type="file" accept="image/png, image/jpeg">

                                    </section>

                                    <div class="input-group">

                                        <div class="input-box">
                                            <label for="titulo">Titulo Pd.</label>
                                            <input id="titulo" type="text" name="titulo" placeholder="Digite o Titulo">
                                        </div>

                                        <div class="input-box">
                                            <label for="preco">Preço R$.</label>
                                            <input id="preco" type="int" name="preco" placeholder="Digite o preço">
                                        </div>

                                        <div class="input-box">
                                            <label for="categoria">categoria</label>
                                            <input id="categoria" type="text" name="categoria" placeholder="Digite a categoria">
                                        </div>

                                        <div class="input-box">
                                            <label for="descricao">Descricao</label>
                                            <input id="descricao" type="text" name="descricao" placeholder="Digite a descrição">
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