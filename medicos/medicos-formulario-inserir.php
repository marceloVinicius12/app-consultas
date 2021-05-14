<?php include "../includes/cabecalho.php"; ?>

<form name="formulario-inserir-medicos" method="post" action="medicos-inserir.php">
    <p>
        <label>Nome: </label><input name="nome">
</p>
<p>
    <label>Telefone: </label><input name="telefone">
</p>
<p>
    <Label>crm: </Label><input name="crm">
</p>
<p>
    <label>Especialidades: </label>
    <select name="especialidade">
    <option value="cardiologista">cardiologista</option>
    <option value="nutricionista">nutricionista</option>
    <option value="ortopedista">ortopedista</option>
    </select>
</p>
<p>
    <button type="subtmit">Salvar</button>
</p>
</form>
<?php include "../includes/rodape.php"; ?>