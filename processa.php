<?php
session_start();
include_once ("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$sexo = filter_input(INPUT_POST, 'sexo');
$niver = filter_input(INPUT_POST, 'niver');


//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "INSERT INTO usuarios (nome, email, sexo, niver, created) VALUES ('$nome', '$email', '$sexo', '$niver', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if (mysqli_insert_id($conn)){
    $_SESSION['msg'] = "<p style='color:green'>Usuário cadastrado com sucesso</p><br>";
    header("Location: index.php");
}else{
    $_SESSION['msg'] = "<p style='color:red'>Usuário não foi cadastrado com sucesso</p><br>";
    header("Location: index.php");
}