<?php
    //$conexao=mysql_connect("localhost", "root", "", "atividadephp")


$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "atividadephp";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
?>