<h1 class="text-center">Cadastro de Produto</h1>

<form class="row g-3" action="?page=salvar" method="post">
    <input type="hidden" name="acao" value="cadastrar">

  <div class="col-md-6">
    <label for="input-desc" class="form-label">Descrição</label>
    <input type="text" name="descricao" class="form-control" id="input-desc">
  </div>
  <div class="col-md-6">
    <label for="input-tipo" class="form-label">Tipo</label>
    <input type="text" name="tipo" class="form-control" id="input-tipo">
  </div>
  
<div class="col-md-4">
                <label for="inputState" class="form-label">Unidade de Medida</label>
                <select id="inputState" name="unidade_medida" class="form-select">
                    <option selected>Selecione</option>
                    <option>und</option>
                    <option>saco</option>
                    <option>pacote</option>
                    <option>metro</option>
                    <option>kg</option>
                </select>
            </div>
  
  <div class="col-md-4">
    <label for="" class="form-label">Quantidade</label>
    <input type="number" name="quantidade" class="form-control">
  </div>

  <div class="col-md-4">
    <label for="" class="form-label">Valor</label>
    <input type="number" name="valor" class="form-control">
  </div>
<div class="d-flex justify-content-center">
  <div class="col-md-2 mx-5">
    <button type="submit" class="btn btn-primary px-5">Enviar</button>
  </div>
</div>
</form>