<?php include "../includes/cabecalho.php"; ?>

<form name="formulario-inserir-medicos" method="post" action="medicos-inserir.php">
    <br><Br>
   
    <p><div class="row ">
  <div class="col-md-3">
        <label>Nome: </label><input name="nome" class="form-control">
</p>
</div>
<div class="col-md-3">
<p>
    <label>Telefone: </label><input name="telefone" class="form-control">
</p>
</div>
<div class="col-md-3">
<p>
    <Label>crm: </Label><input name="crm" class="form-control">
</p>
</div>
<p>
    <label>Especialidades: </label>
    <select name="especialidade" class="form-select form-select-sm">
    <option value="cardiologista">cardiologista</option>
    <option value="nutricionista">nutricionista</option>
    <option value="ortopedista">ortopedista</option>
    </select>
</p>
<p>
    <button type="subtmit "class="btn btn-success">Salvar</button>
</p>
</form>
</div>
<?php include "../includes/rodape.php"; ?>