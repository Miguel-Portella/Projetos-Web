<h1>Novo Usuário</h1>

<form action="?page=salvar" method="post">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="nome" class="form-label">Nome</label>
        <input type="text" name="nome" class="form-control" id="nome">
    </div>
    <div class="mb-3">
        <label for="cpf" class="form-label">CPF</label>
        <input type="text" name="cpf" class="form-control" id="cpf">
    </div>
    <div class="mb-3">
            <label for="data_nasc" class="form-label">Data de Nascimento</label>
        <input type="date" name="data_nasc" class="form-control" id="data_nasc">
    </div>
    <div class="mb-3">
        <label class="form-label">Sexo</label>
        <div>
            <input type="radio" name="sexo" value="Masculino" id="sexo_masculino">
                <label for="sexo_masculino">Masculino</label>
            <input type="radio" name="sexo" value="Feminino" id="sexo_feminino">
                <label for="sexo_feminino">Feminino</label>
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Estado Civil</label>
        <div>
            <select name="est_civil" id="">
                <option type="radio" name="est_civil" value="Solteiro" id="est_civil_solteiro">
                    <label for="">Solteiro</label>
                <option type="radio" name="est_civil" value="Casado" id="est_civil_casado">
                    <label for="">Casado</label>
                <option type="radio" name="est_civil" value="Divorciado" id="est_civil_divorciado">
                    <label for="">Divorciado</label>
                <option type="radio" name="est_civil" value="União Estável" id="est_civil_uniao">
                    <label for="">União Estavel</label>
            </select>
        </div>
    </div>
    <div class="mb-3">
        <label for="observacao" class="form-label">Observações</label>
        <textarea name="observacao" class="form-control" id="observacao">Escreva suas observações aqui...</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
