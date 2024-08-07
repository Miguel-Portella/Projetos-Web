<?php 

class Pessoa{
    private $conn;

    public function __construct() {
        $conn = new Conexao();
        $this->conn = $conn;
    }

    public function inserir(){
        $sql = "INSERT INTO participante (nome,cpf,email,data_nasc,escolaridade)
        VALUES('{$_POST['nome']}','{$_POST['cpf']}','{$_POST['email']}','{$_POST['data_nasc']}','{$_POST['escolaridade']}')";

        $this->conn->getconexao()->query($sql);
    }

    public function listar(){
        $sql = "SELECT * FROM participante";

        $result = $this->conn->getconexao()->query($sql);

        $qtd = $result->rowCount();

        if($qtd>0){
            echo'<table class="table">
                <thead class="text-center"> 
                    <tr>
                        <th scope="col"> ID </th>
                        <th scope="col"> Nome </th>
                        <th scope="col"> CPF </th>
                        <th scope="col"> Email </th>
                        <th scope="col"> Data_nasc </th>
                        <th scope="col"> Escolaridade </th>
                        <th scope="col" colspan="2"> Ações </th>
                    </tr>
                </thead>';
                while ($row = $result->fetch(PDO::FETCH_LAZY)) {
                    print"<tbody class='table-group-divider text-center'>";
                        print"<tr>";
                            print ("<td>". $row->id_participante ."</td>");
                            print ("<td>". $row->nome ."</td>");
                            print ("<td>". $row->cpf ."</td>");
                            print ("<td>". $row->email ."</td>");
                            print ("<td>". $row->data_nasc ."</td>");
                            print ("<td>". $row->escolaridade ."</td>");
                            print ("<td> 
                                <button onclick=\"location.href='?page=editar-pessoa&id=".$row->id_participante." ';\"class= 'btn btn-success me-3'> Editar</button>");
                            
                               print("<button onclick=\"if(confirm('Deseja Excluir?')){location.href='?page=salvar-pessoa&acao=excluir&id=".$row->id_participante."';}
                               else{false;}\" class='btn btn-danger'> Excluir </button>
                               </td>");


                }
            print"</table>";
        }
        else{
            print"<p class='alert alert-danger'>Não há resultados para exibir</p>";
        }
    }
    public function atualizar() {
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $data_nasc = $_POST['data_nasc'];
        $escolaridade = $_POST['escolaridade'];

        $sql = "UPDATE  participante SET
        nome = '{$nome}',
        cpf = '{$cpf}',
        email = '{$email}',
        data_nasc = '{$data_nasc}',
        escolaridade = '{$escolaridade}'
        WHERE id_participante = ".$_REQUEST["id"];
        $this->conn->getConexao()->query($sql);
    }
    
    
    
    
    
    
    public function excluir(){
        $sql = "DELETE FROM participante WHERE id_participante =".$_REQUEST['id'];
        $this->conn->getConexao()->query($sql);
    }
}