<?php

include 'classe/Usuario.php';

var_dump($_POST);

$nome = $_POST['nome'];
$user = $_POST['usuario'];
$password = $_POST['senha'];
$Confirmar = $_POST['Confirmar'];

$usuario = new Usuario;

$resultado = $usuario->cadastroUsuario($nome, $user, $password, $Confirmar);

echo '<br>';
echo $resultado;
