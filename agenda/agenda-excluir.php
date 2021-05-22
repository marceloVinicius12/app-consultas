<?php

include "../includes/conexao.php"; 

$id_agenda = $_GET['id_agenda'];
$sqlExcluir = "DELETE FROM  tb_agenda WHERE id = {$id_agenda}";
$resultado = mysqli_query($conexao , $sqlExcluir);

if($resultado){
    echo "Agenda excluida";
    echo "<a href='agenda-listar.php'>Voltar</a>";
}else{
echo "algo deu errado";
}

?>