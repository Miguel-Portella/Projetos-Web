<h1>Novo Participante</h1>

<form action="?page=salvar-pessoa" method="post">
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
        <label for="nome" class="form-label">Email</label>
        <input type="text" name="email" class="form-control" id="nome">
    </div>
    <div class="mb-3">
        <label for="data_nasc" class="form-label">Data de Nascimento</label>
        <input type="date" name="data_nasc" class="form-control" id="data_nasc">
    </div>
    <div class="mb-3">
    <div class="mb-3">
        <label class="form-label">Escolaridade</label>
        <div>
            <select name="escolaridade" id="" class="form-select">
                <option type="radio" name="escolaridade" value="Ensino fundamental incompleto">
                <label for="">Ensino fundamental incompleto</label>
                <option type="radio" name="escolaridade" value="Ensino fundamental completo">
                <label for="">Ensino fundamental completo</label>
                <option type="radio" name="escolaridade" value="Ensino médio incompleto">
                <label for="">Ensino médio incompleto</label>
                <option type="radio" name="escolaridade" value="Ensino médio completo">
                <label for="">Ensino médio completo</label>
                <option type="radio" name="escolaridade" value="Ensino superior incompleto">
                <label for="">Ensino superior incompleto</label>
                <option type="radio" name="escolaridade" value="Ensino superior completo">
                <label for="">Ensino superior completo</label>
            </select>
        </div>
    </div>
    <div>
        <button type="subimit" class="btn btn-secondary">Enviar</button>
    </div>