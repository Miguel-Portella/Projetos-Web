<h1 class="text-center">Editar participante</h1>

<?php 
$sql = "SELECT * FROM participante WHERE id_participante =".$_REQUEST['id'];
$conn = new Conexao();
$result = $conn->getConexao()->query($sql);
$row = $result -> fetch(PDO::FETCH_LAZY);
?>

<form action="?page=salvar-pessoa" method="post">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php echo $row->id_participante; ?>">
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" name="nome" class="form-control" id="nome" value=" <?php echo $row->nome; ?>">
    </div>
    <div class="mb-3">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" name="cpf" class="form-control" id="cpf" value=" <?php echo $row->cpf; ?>">
    </div>
    <div class="mb-3">
        <label for="nome" class="form-label">Email</label>
        <input type="text" name="email" class="form-control" id="nome"  value=" <?php echo $row->email; ?>">
    </div>
    <div class="mb-3">
        <label for="data_nasc" class="form-label">Data de Nascimento</label>
        <input type="date" name="data_nasc" class="form-control" id="data_nasc"  value="<?php print($row->data_nasc); ?>">
    </div>
    <div class="mb-3">
    <div class="mb-3">
        <label class="form-label">Escolaridade</label>
        <div>
            <select name="escolaridade" id="" class="form-select">
                <option type="radio" name="escolaridade" value="Ensino fundamental incompleto" <?php if($row->escolaridade == "Ensino fundamental incompleto") echo "selected"; ?>>
                <label for="">Ensino fundamental incompleto</label>
                <option type="radio" name="escolaridade" value="Ensino fundamental completo" <?php if($row->escolaridade == "Ensino fundamental completo") echo "selected"; ?>>
                <label for="">Ensino fundamental completo</label>
                <option type="radio" name="escolaridade" value="Ensino médio incompleto" <?php if($row->escolaridade == "Ensino médio incompleto") echo "selected"; ?>>
                <label for="">Ensino médio incompleto</label>
                <option type="radio" name="escolaridade" value="Ensino médio completo" <?php if($row->escolaridade == "Ensino médio completo") echo "selected"; ?>>
                <label for="">Ensino médio completo</label>
                <option type="radio" name="escolaridade" value="Ensino superior incompleto" <?php if($row->escolaridade == "Ensino superior incompleto") echo "selected"; ?>>
                <label for="">Ensino superior incompleto</label>
                <option type="radio" name="escolaridade" value="Ensino superior completo"  <?php if($row->escolaridade == "Ensino superior completo") echo "selected"; ?>>
                <label for="">Ensino superior completo</label>
            </select>
        </div>
    </div>
    <div>
        <button type="subimit" class="btn btn-secondary">Enviar</button>
    </div>