
<form method="post" action="dados.php">
    <h1>Cadastro</h1>
    <div class="form">
        <label for="">Nome</label> <br>
        <input type="Text" name="nome"><br>
    </div>
    <div class="form">
        <label for="">CPF </label><br>
        <input type="number" name="cpf"><br>
    </div>
    <div class="form">
        <label for="">Data de Nascimento </label><br>
        <input type="date" name="data_nasc"><br>
    </div>
    <div class="form">
        <label for="">Estado civil </label><br>
        <input type="radio" name="est_civil" value="Solteiro">Solteiro<br>
        <input type="radio" name="est_civil" value="Casado">Casado<br>
        <input type="radio" name="est_civil" value="Divorciado">Divorciado<br>
        <input type="radio" name="est_civil" value="União estavel">União estavel<br>
    </div>
    <div class="form">
        <label for="">Profissão</label><br>
        <input type="text" name="profissao">
    </div>
    <div class="form">
        <label for="">Endereço</label><br>
        <input type="text" name="endereco">
    </div>
    <button type='submit'>Enviar</button>
</form>

<style>
    *{text-align: center; font-family: roboto;} .form{margin:25px;}
</style>