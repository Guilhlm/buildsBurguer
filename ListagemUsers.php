<?php session_start(); ?>

<?php

class Usuario
{
    public function ListarUsuarios()
    {
        $conn = new PDO("mysql:host=62.72.62.1;dbname=u687609827_gui", "u687609827_gui", "Ou]Q||Jr^7H");
        // $scriptUsuario = "SELECT * FROM tb_usuarios";
        $scriptUsuario = "SELECT * FROM tb_usuarios INNER JOIN tb_pessoas ON tb_usuarios.id_pessoa = tb_pessoas.id";
        $resultadoUsuario = $conn->query($scriptUsuario)->fetchAll();
        return $resultadoUsuario;
    }
}

$usuario = new Usuario();
$dados = $usuario->ListarUsuarios(); ?>


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
            <form method="POST" action="">
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
                        <?php foreach ($dados as $valor) { ?>

                            <tr>

                                <td class="td"><?=($valor['id']) ?></td>
                                <td class="td"><input class="EmailGrande" type="text" name="email" value="<?=($valor['usuario']) ?>"></td>
                                <td class="td"><input type="text" name="nome" value="<?=($valor['nome']) ?>"></td>
                                <td class="td"><input type="password" name="nome" value="<?=($valor['senha']) ?>"></td>
                                <td class="td"><input type="text" name="ano_nascimento" value="<?=($valor['ano_nascimento']) ?>"></td>
                                <td class="td"><input type="text" name="cpf" value="<?=($valor['cpf']) ?>"></td>
                                <td class="td"><input type="text" name="nome" value="<?=($valor['telefone_1']) ?>"></td>
                                <td class="td"><input type="text" name="nivel" value="<?=($valor['nivel']) ?>"></td>
                                <td>

                                    <form method="POST" action="menu.php" style="display:inline;">
                                        <input type="hidden" name="id" value="<?=($valor['id']) ?>">
                                        <button type="submit" class="editUser">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0" />
                                                <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1z" />
                                                <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0z" />
                                            </svg>

                                        </button>
                                    </form>

                                    <form method="POST" action="sobre.php" style="display:inline;">
                                        <input type="hidden" name="id" value="<?=($valor['id']) ?>">
                                        <button type="submit" class="deleteUser">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5" />
                                            </svg>

                                        </button>
                                    </form>

                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </form>
        </section>
    </main>
    <script src="script.js"></script>

</body>

</html>