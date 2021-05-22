<?php
 include "../includes/cabecalho.php"; 
include "../includes/conexao.php";  


$id_agenda = $_GET['id_agenda'];

$sqlBuscaragenda = "SELECT * from tb_agenda where id = {$id_agenda};";

 $data = $hora = $id_medico = $sala = $id_paciente = "";
 $Listadeagenda = mysqli_query($conexao , $sqlBuscaragenda);
 while($agenda = mysqli_fetch_assoc($Listadeagenda)){
    $data = $agenda['data'];
    $hora = $agenda['hora'];
    $id_medico = $agenda['id_medico'];
    $sala = $agenda['sala'];
    $id_paciente = $agenda['id_paciente'];
 }
?>
<form name="formulario-alterar-agenda" method="post" action="agenda-alterar.php">
    <input name="id_agenda" type="hidden" value="<?php echo $id_agenda ; ?>">
    <p>
        <div class="row ">
  <div class="col-md-3">
        <label>data</label><input name="data" type="date" class="form-control" value="<?php echo $data ?>">;
</p>    
    <p>
        <label>hora</label>
        <input type="time" name="hora" value="<?php echo $hora; ?>">;
    </p>

    <p>
        <label>medico</label>
        <select name="id_medico">
           <?php 
           $sqlBuscaMedicos = "SELECT * FROM tb_medicos";
           $listaDeMedicos = mysqli_query($conexao , $sqlBuscaMedicos);
           while($medico = mysqli_fetch_assoc($listaDeMedicos)){
               if($id_medico == $medico['id']){
                echo "<option value='{$medico['id']}' selected>";
               }else{
                echo "<option value='{$medico['id']}'>";
               }
            echo $medico['nome'];
            echo "</option>";
           }        
           ?>
        </select>
    </p>
    <p>
        <label>sala</label>
        <input name="sala" value=<?php echo $sala;?>>
    </p>
    <p>
        <label>paciente :</label>
        <select name="id_paciente" value=<?php echo $paciente;?> >
        <?php 
           $sqlBuscapacientes = "SELECT * FROM tb_pacientes";
           $listaDepacientes = mysqli_query($conexao , $sqlBuscapacientes);
           while($paciente = mysqli_fetch_assoc($listaDepacientes)){
               if($id_paciente == $paciente['id']){
                echo "<option value='{$paciente['id']}' selected>";
            }else{
             echo "<option value='{$paciente['id']}'>";
            }
            echo $paciente['nome'];
            echo "</option>";
           }        
           ?>
        </select>
    </p>
    <p>
   <button type="submit">salvar</button>
    </p>
</form>