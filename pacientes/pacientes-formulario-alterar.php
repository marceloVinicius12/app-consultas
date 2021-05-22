<?php 
include "../includes/cabecalho.php";
include "../includes/conexao.php"; 

$id_paciente = $_GET['id'];

$sqlBusca = "SELECT * FROM tb_pacientes WHERE id = {$id_paciente}";
$ListaDePacientes = mysqli_query($conexao , $sqlBusca);
$nome = $telefone = $convenio = $data_nascimento = $diagnostico = "";

while($paciente = mysqli_fetch_assoc($ListaDePacientes)){
    $nome = $paciente['nome'];
    $telefone = $paciente['telefone'];
    $convenio = $paciente['convenio'];
    $diagnostico = $paciente['diagnostico'];
    $data_nascimento = $paciente['data_nascimento'];
  
}


?>
 
<form name="formulario-pacientes" method="post" action="pacientes-alterar.php">
<input name="id_paciente" type="hidden" value="<?php echo $id_paciente ; ?>">
    <p>
<label>Nome:</label>
<input name="nome" value="<?php echo $nome ; ?>">
    </p>
    <p>
<label>telefone</label>
<input name="telefone" value="<?php echo $telefone ; ?>">
    </p>
    <p>
<label>data de nascimento</label>
<input name="data_nascimento" type="date" value="<?php echo $data_nascimento ; ?>">
    </p>
    <p>
<label>convenio</label>
<?php
$marcado = "";
if($convenio == "sim"){
   $marcado  = "checked";
}
?>
<input name="convenio" type="checkbox" value="sim" <?php echo $marcado ; ?>>
    </p>
    <p>
<label>diagnostico</label>
<textarea name="diagnostico"><?php echo $diagnostico ; ?></textarea>
    </p>
    <p>
        <button type="submit">salvar</button> 
    </p>
</form>

<?php include "../includes/rodape.php"; ?>