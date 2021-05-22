<?php include "../includes/conexao.php"; 

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$data_nascimento = $_POST['data_nascimento'];
$convenio = $_POST['convenio'];
$diagnostico = $_POST['diagnostico'];

$sqlInserir = "INSERT INTO tb_pacientes(nome, telefone, data_nascimento, convenio, diagnostico)
VALUES(
 '{$nome}',
 '{$telefone}',
 '{$data_nascimento}',
 '{$convenio}',
 '{$diagnostico}'
 );";

 $resultado = mysqli_query($conexao , $sqlInserir);

 if($resultado){
     echo "cadastro realizado com sucesso";
     echo "<a href='agenda-listar.php'>voltar</a>";
 }else{
     echo "algo deu errado";
 }
?>



