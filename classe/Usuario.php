<?php

class usuario
{
    public function cadastroUsuario($nome, $user, $password, $Confirmar)
    {
        try {

            if (empty($nome) || $nome == null) {

                return 'nome nao informado';
            }

            if (empty($user) || $user == null) {

                return 'usuario nao informado';
            }

            if (empty($password) || $password == null) {

                return 'senha nao informada';
            }

            if ($password != $Confirmar) {

                return 'as senhas nao sao iguais';
            }

            $conn = new PDO("mysql:host=62.72.62.1;dbname=u687609827_gui", "u687609827_gui", "Ou]Q||Jr^7H");
            $script = 'INSERT INTO tb_usuarios (nome, usuario, senha) VALUE (:nome, :usuario, :senha)';
            $pre = $conn->prepare($script); // prepare eh função
            $var = [

                ':nome' => $nome,
                ':usuario' => $user,
                ':senha' => $password

            ];
            $pre->execute($var); //execute eh função

            return "cadastrado com sucesso id: " . $conn->lastInsertId();
        } catch (PDOException $erro) {

            echo 'deu erro parceiro' . $erro->getMessage();
        }
    }
}
