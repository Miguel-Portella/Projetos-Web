<?php
class Dados{
    public $nome;
    public $cpf;
    public $data_nasc;
    public $est_civil;
    public $profissao;
    public $endereco;
    function mostrar($n){
        print $n;
    }

}

$dados = new Dados();


$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$data_nasc = $_POST['data_nasc'];
$est_civil = $_POST['est_civil'];
$profissao = $_POST['profissao'];
$endereco = $_POST['endereco'];



?>
<h1>Dados de Cadastro</h1>
<p>
    Nome: <?php echo $dados->mostrar($nome); ?>
</p>
<p>
    CPF:  <?php echo $dados->mostrar($cpf); ?>
</p>
<p>
    Data de Nascimento:  <?php echo $dados->mostrar($data_nasc); ?>
</p>
<p>
    Estado Civil:  <?php echo $dados->mostrar($est_civil); ?>
</p>
<p>
    Profissão:  <?php echo $dados->mostrar($profissao); ?>
</p>
<p>
    Endereço:  <?php echo $dados->mostrar($endereco); ?>
</p>
<style>
    *{font-family: roboto; text-align: center;}
    p{margin: 50px;}
</style>
