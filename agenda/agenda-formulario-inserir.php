<?php include "../includes/cabecalho.php";
 include "../includes/conexao.php"; ?>
<form name="cadastro-agenda" method="post" action="agenda-inserir.php">
    <div class="row">
    <p class="col">
        <label class="form-label">data:</label>
        <input type="date" name="data" class="form-control">
    </p>
    <p class="col">
        <label class="form-label">hora</label>
        <input type="time" name="hora"  class="form-control">
    </p>
    </div>
    <p>
    <div class="row">
        <p class="col">
        <label class="form-label">medico</label>
        <select name="id_medico"  class="form-select">
           <?php 
           $sqlBuscaMedicos = "SELECT * FROM tb_medicos";
           $listaDeMedicos = mysqli_query($conexao , $sqlBuscaMedicos);
           while($medico = mysqli_fetch_assoc($listaDeMedicos)){
            echo "<option value='{$medico['id']}'>";
            echo $medico['nome'];
            echo "</option>";
           }        
           ?>
        </select>
    </p>
    <p class="col">
        <label>sala</label>
        <input name="sala"  class="form-control">
    </p>
        </div>
    <p>
    
        <label>paciente :</label>
        <select name="id_paciente"  class="form-select">
        <?php 
           $sqlBuscapacientes = "SELECT * FROM tb_pacientes";
           $listaDepacientes = mysqli_query($conexao , $sqlBuscapacientes);
           while($paciente = mysqli_fetch_assoc($listaDepacientes)){
            echo "<option value='{$paciente['id']}'>";
            echo $paciente['nome'];
            echo "</option>";
           }        
           ?>
        </select>
    </p>
    <p>
   <button type="submit" class="btn btn-success">salvar</button>
    </p>
</form>

<?php include "../includes/rodape.php"; ?>