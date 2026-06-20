<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "techfix";

$conn = mysqli_connect(
    $host,
    $usuario,
    $senha,
    $banco
);

if(!$conn){

    die("Erro na conexão com o banco!");

}

?>