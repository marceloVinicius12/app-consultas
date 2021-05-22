<?php include "../includes/cabecalho.php"; ?>
 
<form name="formulario-pacientes" method="post" action="pacientes-inserir.php">
   
    <p>
<label>Nome:</label>
<input name="nome">
    </p>
    <p>
<label>telefone</label>
<input name="telefone">
    </p>
    <p>
<label>data de nascimento</label>
<input name="data_nascimento" type="date">
    </p>
    <p>
<label>convenio</label>
<input name="convenio" type="checkbox" value="sim">
    </p>
    <p>
<label>diagnostico</label>
<textarea name="diagnostico" type="text"></textarea>
    </p>
    <p>
        <button type="submit">salvar</button>    
    
    
    
    
    
    
   
<?php include "../includes/rodape.php"; ?>