<?php

$host = "sql204.ezyro.com";
$usuario = "ezyro_42232560";
$senha = "c6d2bf65d313";
$banco = "ezyro_42232560_Techfix";

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