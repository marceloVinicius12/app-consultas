<?php include "../includes/cabecalho.php"; 
 include "../includes/conexao.php"; 
 
 $sqlBusca = "SELECT
  tb_agenda.id, 
  tb_agenda.data, 
  tb_agenda.hora, 
  tb_medicos.nome as 'nome_medico',
  tb_agenda.sala, 
  tb_pacientes.nome as 'nome_paciente' 
  FROM tb_agenda
   inner join tb_pacientes on tb_agenda.id_paciente = tb_pacientes.id 
   inner join tb_medicos on tb_agenda.id_medico = tb_medicos.id";
 $ListaDeAgenda = mysqli_query($conexao , $sqlBusca);
 ?>
 <hr>
 <?php if(isset($_GET['mensagem'])){
     if($_GET['mensagem'] == 'cadastrado'){
         ?>
     
 <div class="alert alert-primary">
     <p>cadastrado com sucesso</p>
 </div>
 <?php
     }
     if($_GET['mensagem'] == 'excluido'){
         ?>
 <div class="alert alert-danger">
     <p>excluido com sucesso</p>
 </div>
 <?php
     }
 }
    ?>
<a href="agenda-formulario-inserir.php" class="btn btn-success"><i class="bi bi-plus-circle"></i>nova consulta</a></p>
<table class="table table hover">
    <tr>
        <th>ID</th>
        <th>data</th>
        <th>hora</th>
        <th>medico</th>
        <th>sala</th>
        <th>paciente</th>
        <th>ações</th>
        
    </tr>


    <?php
    while($agenda = mysqli_fetch_assoc($ListaDeAgenda)){
        echo "<tr>";
        echo "<td>{$agenda['id']}</td>";
        echo "<td>{$agenda['data']}</td>";
        echo "<td>{$agenda['hora']}</td>";
        echo "<td>{$agenda['nome_medico']}</td>";
        echo "<td>{$agenda['sala']}</td>";
        echo "<td>{$agenda['nome_paciente']}</td>";
        echo "<td><a class='btn btn-warning' href='agenda-formulario-alterar.php?id_agenda={$agenda['id']}'><i class='bi bi-brush'></i></a> | ";
        echo "<a class='btn btn-danger' href='agenda-excluir.php?id_agenda={$agenda['id']}'><i class='bi bi-x-lg'></i></a></td>";
        echo "</tr>"; 
    }
   
 ?>
</table>
<?php include "../includes/rodape.php"; ?>