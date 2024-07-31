<?php

require './classe/Usuario.php';
session_start();


// --------------- listagem ---------------

$Listaruser = new Usuario();
$resultadoLista = $Listaruser->ListarUsuarios();

// --------------- listagem ---------------




// --------------- editar ---------------

// if (isset($_GET['enviar']) && !empty($_GET['enviar'])) {

//     $id_editarUser = $_GET['id_editarUser'];
//     $nome = $_GET['nome'];
//     $cpf = $_GET['cpf'];
//     $telefone_1 = $_GET['nome'];
//     $ano_nascimento = $_GET['nome'];

//     $usuario = new Usuario();
//     $resultado = $usuario->AtualizarUsuarioLista($id_editarUser, $nome, $telefone_1, $cpf, $ano_nascimento);


//     header('location: ListagemUsers.php');
// }

// --------------- editar ---------------




// --------------- excluir ---------------

if (isset($_GET['id_deleteUser']) && !empty($_GET['id_deleteUser'])) {

    $id_deleteUser = $_GET['id_deleteUser'];

    $usuario = new Usuario();
    $resultado = $usuario->DeletarUser($id_deleteUser);

    header('location: ListagemUsers.php');
}

// --------------- excluir ---------------

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tela de usuarios</title>
    <link rel="stylesheet" href="assets/css/ListagemUsers.css">
</head>

<body>
    <main class="table" id="customers_table">
        <section class="table__header">
            <h1>Todos Usuarios</h1>
            <div class="export__file">
                <label for="export-file" class="export__file-btn" title="Export File"><a href="menu.php">x</a></label>
                <input type="checkbox" id="export-file">
            </div>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th>Id Pessoa</th>
                        <th>Email</th>
                        <th>Nome</th>
                        <th>Senha</th>
                        <th>Ano Nasc.</th>
                        <th>cpf</th>
                        <th>Telefone</th>
                        <th>Nivel</th>
                        <th>Edições</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($resultadoLista as $valor) { ?>

                        <tr>

                            <td class="td"><?= ($valor['id_usuario']) ?></td>
                            <td class="td"><input class="EmailGrande" type="text" name="usuario" value="<?= ($valor['usuario']) ?>"></td>
                            <td class="td"><input type="text" name="nome" value="<?= ($valor['nome']) ?>"></td>
                            <td class="td"><input type="password" name="senha" value="<?= ($valor['senha']) ?>"></td>
                            <td class="td"><input type="text" name="ano_nascimento" value="<?= ($valor['ano_nascimento']) ?>"></td>
                            <td class="td"><input type="text" name="cpf" value="<?= ($valor['cpf']) ?>"></td>
                            <td class="td"><input type="text" name="telefone_1" value="<?= ($valor['telefone_1']) ?>"></td>
                            <td class="td"><input type="text" name="nivel" value="<?= ($valor['nivel']) ?>"></td>
                            <td class="teste">

                                <a class="editUser">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z" />
                                    </svg>

                                </a>


                                <a class="deleteUser" href="ListagemUsers.php?id_deleteUser=<?= $valor['id_usuario'] ?>">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                        <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                                    </svg>

                                </a>

                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </section>
    </main>
    <script src="script.js"></script>

</body>

</html>