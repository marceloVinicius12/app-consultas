<?php

include "../includes/conexao.php";

$id_medico = $_GET['id_medico'];
$sqlExcluir = "DELETE FROM tb_medicos WHERE id = {$id_medico}";
$resultado = mysqli_query($conexao, $sqlExcluir);

if($resultado){
    echo "excluido com sucesso";
    echo "<a href='listar-medicos.php'>voltar</a>";
}else{
    echo "ocorreu um erro";
}

?>