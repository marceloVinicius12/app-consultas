<?php
include "../includes/conexao.php";

$id_medico = $_POST['id_medico'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$crm = $_POST['crm'];
$especialiade = $_POST['especialidade'];

$sqlAlterar = "UPDATE tb_medicos set
     nome = '{$nome}' , 
     telefone = '{$telefone}' ,
     crm ='{$crm}'
     especialidade = '{$especialidade}'
     WHERE id = {id_medico}";

$resultado = mysqli_query($conexao , $sqlAlterar);

if($resultado){
    echo "alterado com sucesso";
    echo "<a href='medicos-listar.php'>Voltar</a>";
}else{
    echo "ocooreu erro ai";
}