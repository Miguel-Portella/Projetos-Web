<h1 class="text-center">Editar Palestra</h1>

<?php 
try {
    // Garantir que o id seja um número inteiro para evitar injeções SQL
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    // Verifique se o id é válido
    if ($id === false || $id <= 0) {
        throw new Exception('ID inválido.');
    }
    
    // Usar um parâmetro nomeado na consulta SQL
    $sql = "SELECT * FROM palestras WHERE id_palestras = :id";

    $conn = new Conexao();
    $stmt = $conn->getConexao()->prepare($sql);
    
    // Vincular o parâmetro nomeado
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_LAZY);

    if (!$row) {
        throw new Exception('Palestra não encontrada.');
    }
} catch (PDOException $e) {
    echo "Erro na consulta SQL: " . $e->getMessage();
    exit;
} catch (Exception $e) {
    echo "Erro: " . $e->getMessage();
    exit;
}
?>

<form class="row g-3" action="?page=salvar-palestra" method="post">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($row->id_palestras); ?>">
    
    <div class="col-md-6">
        <label for="input-nome" class="form-label">Nome</label>
        <input type="text" name="nome" class="form-control" id="input-nome" value="<?php echo htmlspecialchars($row->nome); ?>">
    </div>
    
    <div class="col-md-6">
        <label for="input-data" class="form-label">Data</label>
        <input type="date" name="data" class="form-control" id="input-data" value="<?php echo $row->data; ?>">
    </div>
    
    <div class="col-md-4">
        <label for="input-horario" class="form-label">Horário</label>
        <input type="text" name="horario" class="form-control" id="input-horario" value="<?php echo htmlspecialchars($row->horario); ?>">
    </div>
    
    <div class="col-md-4">
        <label for="input-vagas" class="form-label">Vagas</label>
        <input type="number" name="vagas" class="form-control" id="input-vagas" value="<?php echo htmlspecialchars($row->vagas); ?>">
    </div>
    
    <div class="col-md-4">
        <label for="input-observacao" class="form-label">Observações</label>
        <input type="text" name="observacao" class="form-control" id="input-observacao" value="<?php echo htmlspecialchars($row->observacao); ?>">
    </div>
    
    <div class="d-flex justify-content-center">
        <div class="col-md-2 mx-5">
            <button type="submit" class="btn btn-primary px-5">Enviar</button>
        </div>
    </div>
</form>
