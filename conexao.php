<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "bd_consultorio";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
if(!$conexao){
die("<h3>Nao conectou</h3> erro:" . mysqli_connect_error());
}
?>