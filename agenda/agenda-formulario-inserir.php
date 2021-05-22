<?php include "../includes/cabecalho.php";
 include "../includes/conexao.php"; ?>
<form name="cadastro-agenda" method="post" action="agenda-inserir.php">
    <p>
        <label>data:</label>
        <input type="date" name="data">
    </p>
    <p>
        <label>hora</label>
        <input type="time" name="hora">
    </p>

    <p>
        <label>medico</label>
        <select name="id_medico">
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
    <p>
        <label>sala</label>
        <input name="sala">
    </p>
    <p>
        <label>paciente :</label>
        <select name="id_paciente">
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
   <button type="submit">salvar</button>
    </p>
</form>

<?php include "../includes/rodape.php"; ?>