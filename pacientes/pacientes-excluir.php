<?php
include "../includes/conexao.php";
$id_paciente = $_GET['id'];

$sqlExcluir = "DELETE FROM tb_pacientes WHERE id = {$id_paciente} ;";

$resultado = mysqli_query($conexao , $sqlExcluir);
if($resultado){
    echo "excluido com sucesso.";
    echo "<a href='pacientes-listar.php'>voltar</a>";
}else{
    echo "algum erro aconteceu";
}

?>