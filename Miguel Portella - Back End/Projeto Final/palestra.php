<?php 

class Palestra{
    private $conn;

    public function __construct() {
        $conn = new Conexao();
        $this->conn = $conn;
    }

    public function inserir(){
        $sql = "INSERT INTO palestras (nome ,data,horario,vagas,observacao)
        VALUES('{$_POST['nome']}','{$_POST['data']}','{$_POST['horario']}','{$_POST['vagas']}','{$_POST['observacao']}')";

        $this->conn->getconexao()->query($sql);
    }

    public function listar(){
        $sql = "SELECT * FROM palestras";

        $result = $this->conn->getconexao()->query($sql);

        $qtd = $result->rowCount();

        if($qtd>0){
            echo'<table class="table">
                <thead class="text-center"> 
                    <tr>
                        <th scope="col"> ID </th>
                        <th scope="col"> Nome </th>
                        <th scope="col"> Data</th>
                        <th scope="col"> Horário </th>
                        <th scope="col"> Vagas </th>
                        <th scope="col"> Observações </th>
                        <th scope="col" colspan="2"> Ações </th>
                    </tr>
                </thead>';
                while ($row = $result->fetch(PDO::FETCH_LAZY)) {
                    print"<tbody class='table-group-divider text-center'>";
                        print"<tr>";
                            print ("<td>". $row->id_palestras ."</td>");
                            print ("<td>". $row->nome ."</td>");
                            print ("<td>". $row->data ."</td>");
                            print ("<td>". $row->horario ."</td>");
                            print ("<td>". $row->vagas ."</td>");
                            print ("<td>". $row->observacao ."</td>");
                            print ("<td> 
                                <button onclick=\"location.href='?page=editar-palestra&id=".$row->id_palestras." ';\"class= 'btn btn-success me-3'> Editar</button>");
                            
                               print("<button onclick=\"if(confirm('Deseja Excluir?')){location.href='?page=salvar-palestra&acao=excluir&id=".$row->id_palestras."';}
                               else{false;}\" class='btn btn-danger'> Excluir </button>
                               </td>");
                    


                }
            print"</table>";
        }
        else{
            print"<p class='alert alert-danger'>Não há resultados para exibir</p>";
        }
    }
    public function atualizar(){
        $nome = $_POST['nome'];
        $data = $_POST['data'];
        $horario = $_POST['horario'];
        $vagas = $_POST['vagas'];
        $observacao = $_POST['observacao'];

        $sql = "UPDATE  palestras SET
        nome = '{$nome}',
        data = '{$data}',
        horario = '{$horario}',
        vagas = '{$vagas}',
        observacao = '{$observacao}'
        WHERE id_palestras = ".$_REQUEST["id"];
        $this->conn->getConexao()->query($sql);
    }
    public function excluir(){

        $sql = "DELETE FROM palestras WHERE   id_palestras=".$_REQUEST['id'];
        $this->conn->getConexao()->query($sql);
    }
}
