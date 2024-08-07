<h1 class="text-center">Registrar Palestra</h1>


<?php 
$id = isset($_REQUEST['id']) ? (int) $_REQUEST['id'] : 0;

$sql = "SELECT * FROM palestras WHERE id_palestras = :id";
$conn = new Conexao();
$stmt = $conn->getConexao()->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_LAZY);
?>



<form class="row g-3" action="?page=salvar-palestra" method="post">
    <input type="hidden" name="acao" value="cadastrar">
    

  <div class="col-md-6">
    <label for="input-desc" class="form-label">Nome</label>
    <input type="text" name="nome" class="form-control" id="input-desc">
  </div>
  <div class="col-md-6">
    <label for="input-tipo" class="form-label">Data</label>
    <input type="date" name="data" class="form-control" id="input-tipo">
  </div>
  
<div class="col-md-4">
                <label for="inputState" class="form-label" class="form-label">Horário</label>
              <input type="time" name="horario" class="form-control">

            </div>
  
  <div class="col-md-4">
    <label for="" class="form-label">Vagas</label>
    <input type="number" name="vagas" class="form-control">
  </div>

  <div class="col-md-4">
    <label for="" class="form-label">Observações</label>
    <input type="text" name="observacao" class="form-control">
  </div>
<div class="d-flex justify-content-center">
  <div class="col-md-2 mx-5">
    <button type="submit" class="btn btn-primary px-5">Enviar</button>
  </div>
</div>
</form>