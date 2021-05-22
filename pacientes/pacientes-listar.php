<?php include "../includes/cabecalho.php"; ?>
<?php
include "../includes/conexao.php";
$sqlBusca = "SELECT * FROM tb_pacientes";
$listaDePacientes = mysqli_query($conexao , $sqlBusca);
?>
<p>
    <a href="pacientes-formulario-inserir.php">novo paciente</a>
<table class="table table-hover">
    <tr>
        <td>ID</td>
        <td>nome</td>
        <td>telefone</td>
        <td>data de nascimento </td>
        <td>convenio </td>
        <td>ações</td>
    </tr>
    <?php 
    while($paciente = mysqli_fetch_assoc($listaDePacientes)){
        echo "<tr>";
        echo "<td>{$paciente['id']}</td>";
        echo "<td>{$paciente['nome']}</td>";
        echo "<td>{$paciente['telefone']}</td>";
        $dataBrasil = date('d-m-Y' , strtotime($paciente['data_nascimento']));
        echo "<td>{$dataBrasil}</td>";
        echo "<td>{$paciente['convenio']}</td>";
        echo "<td><a href='pacientes-formulario-alterar.php?id={$paciente['id']}'>alterar</a> |";
        echo "<a href='pacientes-excluir.php?id={$paciente['id']}'>Excluir</a></td>";
        echo "</tr>"; 
    }
    ?>
<?php include "../includes/rodape.php"; ?>

