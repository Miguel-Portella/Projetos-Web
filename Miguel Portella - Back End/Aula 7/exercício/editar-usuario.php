
<h1>Editar Usuário</h1>

<?php


    $sql = "SELECT * FROM user1 WHERE user_id = ".$_REQUEST['id'];
    $result = $conn -> query($sql);
    $row = $result ->  fetch_object();
?>

<form action="?page=salvar" method="post">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row-> user_id ?>">
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" name="nome" class="form-control" id="nome" value="<?php print $row-> nome ?>">
    </div>
    <div class="mb-3">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" name="cpf" class="form-control" id="cpf" value="<?php print $row-> cpf ?>">
    </div>
    <div class="mb-3">
        <label for="data_nasc" class="form-label">Data de Nascimento</label>
        <input type="date" name="data_nasc" class="form-control" id="data_nasc"  value="<?php print $row-> data_nasc ?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Sexo</label>
        <div>
            <input type="radio" name="sexo" value="Masculino" id="sexo_masculino" <?php if ($row->sexo == "Masculino"){print "checked";}?>>
            <label for="sexo_masculino">Masculino</label>
            <input type="radio" name="sexo" value="Feminino" id="sexo_feminino" <?php 
            if ($row->sexo == "Feminino"){
                print "checked";}
            ?>>
            <label for="sexo_feminino">Feminino</label>
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Estado Civil</label>
        <div>
        <select class="form-control" name="est_civil">
  <option value="Solteiro" <?php if ($row->est_civil == "Solteiro"){print "selected";}?>>Solteiro</option>
  <option value="Casado" <?php if ($row->est_civil == "Casado"){print "selected";}?>>Casado</option>
  <option value="Divorciado" <?php if ($row->est_civil == "Divorciado"){print "selected";}?>>Divorciado</option>
  <option value="União Estavel" <?php if ($row->est_civil == "União Estavel"){print "selected";}?>>União estavel</option>
</select>
        </div>
    </div>
    <div class="mb-3">
        <label for="observacao" class="form-label">Observações</label>
        <textarea name="observacao" class="form-control" id="observacao"><?php print $row-> observacao ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>