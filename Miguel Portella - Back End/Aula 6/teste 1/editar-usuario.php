<h1>Editar Usuário</h1>

<?php
    $sql = "SELECT * FROM usuario WHERE id_usuario = ".$REQUEST['id'];
    $result = $conn->query($sql);
    $row = $result->fetch_object();
    var_dump($row);
?>

<form action="?page-salvar" method="post">
    <input type="hiden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row-> id_usuario ?>">
    <div class="mb-3">
        <label for="">Nome</label>
        <input type="text" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">E-mail</label>
        <input type="email" name="email">
    </div>
    <div class="mb-3">
        <label for="">Senha<label>
        <input type="password" name="senha">
    </div>
    <div class="mb-3">
        <label for="">Data de Nascimento</label>
        <input type="date" name="data_nasc">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>