<?php
class Usuario
{
    public function LoginUser()
    {
        try {

            if (isset($_POST['usuario']) && !empty($_POST['usuario'])) {

                $user = $_POST['usuario'];
                $password = $_POST['senha'];


                $conn = new PDO("mysql:host=62.72.62.1;dbname=u687609827_gui", "u687609827_gui", "Ou]Q||Jr^7H");
                $scriptLogin = "SELECT * FROM tb_usuarios INNER JOIN tb_pessoas ON tb_usuarios.id_pessoa = tb_pessoas.id WHERE usuario = '{$user}' AND senha = '{$password}'";
                $resultadoLogin = $conn->query($scriptLogin)->fetch();

                if (!empty($resultadoLogin)) {

                    session_start();

                    $_SESSION["usuario"] = $user;
                    $nivel = $resultadoLogin['nivel'];
                    $_SESSION["nivel"] = $nivel;


                    $_SESSION['id'] = $resultadoLogin['id'];
                    $_SESSION['nome'] = $resultadoLogin['nome'];
                    $_SESSION['cpf'] = $resultadoLogin['cpf'];
                    $_SESSION['telefone_1'] = $resultadoLogin['telefone_1'];
                    $_SESSION['ano_nascimento'] = $resultadoLogin['ano_nascimento'];

                    header('location: editarUsuario.php');
                    sleep(1);
                } else {
                    $erro = "Usuário ou senha incorretos.";
                }
            }

        } catch (PDOException $erro) {
            echo "Seguinte, deu erro no negocio do treco <br>" . $erro->getMessage();
        }
    }

    public function CadastroUser()
    {
        try {

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
            }
        } catch (PDOException $erro) {
            echo "Seguinte, deu erro no negocio do treco <br>" . $erro->getMessage();
        }
    }

    public function CadastroADM()
    {
        if (isset($_SESSION['nivel']) && !empty($_SESSION['nivel']) && isset($_POST) && !empty($_POST)) {

            try {

                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];
                $nivel = $_POST['nivel'];

                $conn = new PDO("mysql:host=62.72.62.1;dbname=u687609827_gui", "u687609827_gui", "Ou]Q||Jr^7H");
                $scriptCadastroPessoinha = "INSERT INTO tb_pessoas (nome) VALUE ('{$nome}')";
                $resultadoCadastroADM = $conn->prepare($scriptCadastroPessoinha)->execute([]);
                $pessoaID = $conn->lastInsertId();

                $scriptCadastroADM = "INSERT INTO tb_usuarios (nome, usuario, senha, id_pessoa, nivel) VALUE ('{$nome}', '{$email}', '{$senha}', '{$pessoaID}', '{$nivel}')";
                $resultadoCadastro = $conn->prepare($scriptCadastroADM)->execute([]);

                echo "<script>alert('ADMIN cadastrado');</script>";
            } catch (PDOException) {
                echo "<script>alert('seguinte deu uma coisa no treco');</script>";
            }
        }
    }

    public function ListarUsuarios()
    {
        $conn = new PDO("mysql:host=62.72.62.1;dbname=u687609827_gui", "u687609827_gui", "Ou]Q||Jr^7H");
        $scriptListarUsuario = "SELECT *, tb_usuarios.id AS id_usuario FROM tb_usuarios INNER JOIN tb_pessoas ON tb_usuarios.id_pessoa = tb_pessoas.id";
        $resultadoListagemUsuario = $conn->query($scriptListarUsuario)->fetchAll();
        return $resultadoListagemUsuario;
    }

    public function AtualizarUsuario()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) {

            try {
                $id = $_POST['id'];
                $nome = $_POST['nome'];
                $telefone_1 = $_POST['telefone_1'];
                $cpf = $_POST['cpf'];
                $ano_nascimento = $_POST['ano_nascimento'];

                $conn = new PDO("mysql:host=62.72.62.1;dbname=u687609827_gui", "u687609827_gui", "Ou]Q||Jr^7H");
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                $scriptUpdatePessoa = "UPDATE tb_pessoas SET nome = :nome, ano_nascimento = :ano_nascimento, cpf = :cpf, telefone_1 = :telefone_1 WHERE id = :id";
                $variaveis = $conn->prepare($scriptUpdatePessoa);

                $variaveis->execute([
                    ':id' => $id,
                    ':nome' => $nome,
                    ':ano_nascimento' => $ano_nascimento,
                    ':cpf' => $cpf,
                    ':telefone_1' => $telefone_1
                ]);

                echo "<script>alert('Update realizado, por favor deslogue');</script>";
            } catch (PDOException) {
                echo "<script>alert('seguinte deu uma coisa no treco');</script>";
            }
        }
    }

    public function DeletarUser($id_deleteUser)
    {
        $conn = new PDO("mysql:host=62.72.62.1;dbname=u687609827_gui", "u687609827_gui", "Ou]Q||Jr^7H");
        $scriptDeleteUser = "DELETE FROM tb_usuarios WHERE id = :id";

        $resultadoDeleteUser = $conn->prepare($scriptDeleteUser);

        $resultadoDeleteUser->execute([

            ":id" => $id_deleteUser
        ]);
    }
}
