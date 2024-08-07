<?php



require './classe/Produto.php';
session_start();

// --------------- listagem ---------------

$produto = new Produto();
$dados = $produto->ListarProdutos();


// --------------- editar ---------------

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_GET['id'])) {

    $id = $_GET['id'];
    $titulo = $_POST['titulo'];
    $preco = $_POST['preco'];
    $categoria = $_POST['categoria'];
    $descricao = $_POST['descricao'];

    $editarProdutoLista = new Produto();
    $editarProdutoLista->AtualizarProdutoLista($id, $titulo, $preco, $categoria, $descricao);

    header('Location: ListagemProdutos.php?status=success_edit');
    exit();
}


// --------------- excluir ---------------

if (isset($_GET['id_delete']) && !empty($_GET['id_delete'])) {

    $id_delete = $_GET['id_delete'];
    $produto = new Produto();
    $resultado = $produto->DeletarProduto($id_delete);

    header('Location: ListagemProdutos.php?status=success_delete');
    exit();
}

if (!isset($_SESSION['usuario']) || $_SESSION['nivel'] != "admin"){

    header("location: login.php");

} ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Build's Burguer</title>
    <link rel="shortcut icon" href="assets/img/foto(logo)favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/ListagemProdutos.css">
</head>

<body>
    <main class="table" id="customers_table">
        <section class="table__header">
            <h1>Todos Produtos</h1>

            <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File"><a href="menu.php">x</a></label>
                <input type="checkbox" id="export-file">
            </div>

        </section>

        <?php if (isset($_GET['status'])) : ?>

            <div id="alert-box" class="alert 

                    <?= $_GET['status'] === 'success_edit' ? 'alert-success' : '' ?>
                    <?= $_GET['status'] === 'success_delete' ? 'alert-danger' : '' ?>
                    <?= $_GET['status'] === 'error' ? 'alert-danger' : '' ?> ">

                <?php

                if ($_GET['status'] === 'success_edit') {
                    echo 'Produto editado com sucesso';
                } elseif ($_GET['status'] === 'success_delete') {
                    echo 'Produto excluído com sucesso';
                } elseif ($_GET['status'] === 'error') {
                    echo 'Ocorreu um erro ao processar sua solicitação.';
                }
                ?>

            </div>

        <?php endif; ?>

        <section class="table__body">

            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Imagem</th>
                        <th>Titulo</th>
                        <th>Preço</th>
                        <th>Categoria</th>
                        <th>Descrição</th>
                        <th>Edições</th>
                    </tr>
                </thead>

                <tbody>

                    <?php foreach ($dados as $valor) { ?>

                        <form action="ListagemProdutos.php?id=<?= $valor['id'] ?>" method="POST">

                            <tr>

                                <td class="td naopodeEdit"><?= $valor['id'] ?>
                                <td> <img src="<?= $valor['imagem'] ?>" alt="produto" class="fotoEdit"></td>
                                <td class="td"><input type="text" name="titulo" value="<?= ($valor['titulo']) ?>" class="tituloForm"></td>
                                <td class="td"><input type="text" name="preco" value="<?= ($valor['preco']) ?>"></td>
                                <td class="td"><input type="number" name="categoria" value="<?= ($valor['categoria']) ?>"></td>
                                <td class="td"><input type="text" name="descricao" value="<?= ($valor['descricao']) ?>" class="tituloDesc"></td>

                                <td class="teste">

                                    <button class="editProduto" type="submit">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                        </svg>

                                    </button>

                                    <a class="deleteProduto" href="ListagemProdutos.php?id_delete=<?= $valor['id'] ?>">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                                        </svg>

                                    </a>

                                </td>
                            </tr>
                        </form>
                    <?php } ?>

                </tbody>
            </table>
        </section>
    </main>

    <script src="./assets/script/alert.js"></script>

</body>

</html>