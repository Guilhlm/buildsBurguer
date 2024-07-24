<?php

try {

    if (isset($_POST['id']) && !empty($_POST['id'])) {

        $nome = $_POST['nome'];
        $ano_nascimento = $_POST['ano_nascimento'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone_1'];
        $id = $_POST['id'];



        $conn = new PDO("mysql:host=62.72.62.1;dbname=u687609827_gui", "u687609827_gui", "Ou]Q||Jr^7H");
        $scriptUpdatePessoa = "UPDATE tb_pessoas SET nome = :nome, ano_nascimento = :ano_nascimento, cpf = :cpf, telefone_1 = :telefone WHERE id = :id";

        $preparo = $conn->prepare($scriptUpdatePessoa);

        $preparo->execute([

            // ':nome' => $nome,

            ':nome' => $nome,
            ':ano_nascimento' => $ano_nascimento,
            ':cpf' => $cpf,
            ':telefone_1'=> $telefone_1, 
            'id' => $id,
        ]);

"<script>alert('Usuario alterado com sucesso');</script>";

        header("location:editarUsuario.php");
    }
} catch (PDOException $erro) {
    echo "Erro no update de usuario <br>" . $erro->getMessage();
}
