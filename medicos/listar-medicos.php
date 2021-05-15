<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<?php include "../includes/cabecalho.php"; ?>
<hr>
<p>
<a href="medicos-formulario-inserir.php" class="btn btn-success"></i> Novo medico</a>
</p>

<?php 
include "../includes/conexao.php";
$sqlBusca = "SELECT * FROM tb_medicos; ";
$ListaDeMedicos = mysqli_query($conexao , $sqlBusca);
?>

<table class="table table-striped table-hover">
<tr class="bg-success">
        <th>ID</th>
        <th>Nome</th>
        <th>telefone</th>
        <th>CRM</th>
        <th>Especialidade</th>
        <th>Ações</th>
    </tr>
    <?php
    while($medico = mysqli_fetch_assoc($ListaDeMedicos)){
        echo "<tr>";
        echo "<td>{$medico['id']}</td>";
        echo "<td>{$medico['nome']}</td>";
        echo "<td>{$medico['telefone']}</td>";
        echo "<td>{$medico['crm']}</td>";
        echo "<td>{$medico['especialidade']}</td>";
        echo "<td>Alterar | <a href='medicos-excluir.php?id_medico={$medico['id']}'>Excluir</a></td>";
        echo "</tr>";
    }
  
?>

</table>

<?php include "../includes/rodape.php"; ?>
