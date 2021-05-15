<?php
 include "../includes/cabecalho.php"; 
$id_medico = $_GET['id_medico'];
include "../includes/conexao.php";
$sqlBuscar = "SELECT * FROM tb_medicos WHERE id={$id_medico};";

$listaDeMedicos = mysqli_query($conexao ,  $sqlBuscar);

$nome = $telefone = $crm = $especialidade = ""; 

while($medico = mysqli_fetch_assoc($listaDeMedicos)){
    $nome = $medico['nome'];
    $telefone = $medico['telefone'];
    $crm = $medico['crm'];
    $especialidade = $medico['especialidade'];
}
?>

?>
<form name="formulario-inserir-medicos" method="post" action="medicos-alterar.php">

    <input name="id_medico" type="hidden" value="<?php echo $id_medico;?>">
    <p><div class="row ">
  <div class="col-md-3">
        <label>Nome: </label><input name="nome" class="form-control" value="<?php echo $nome;?>">
</p>
</div>
<div class="col-md-3">
<p>
    <label>Telefone: </label><input name="telefone" class="form-control" value="<?php echo $telefone;?>">
</p>
</div>
<div class="col-md-3">
<p>
    <Label>crm: </Label><input name="crm" class="form-control" value="<?php echo $crm;?>">
</p>
</div>
<p>
    <label>Especialidades: </label>
    <select name="especialidade" class="form-select form-select-sm">
    <option value="cardiologista" <?php if($especialidade == 'cardiologista'){echo "selected";}?>>cardiologista</option>
    <option value="nutricionista"<?php if($especialidade == 'nutricionista'){echo "selected";}?>>nutricionista</option>
    <option value="ortopedista"<?php if($especialidade == 'ortopedista'){echo "selected";}?>>ortopedista</option>
    </select>
</p>
<p>
    <button type="subtmit "class="btn btn-success">Salvar</button>
</p>
</form>
</div>
<?php include "../includes/rodape.php"; ?>