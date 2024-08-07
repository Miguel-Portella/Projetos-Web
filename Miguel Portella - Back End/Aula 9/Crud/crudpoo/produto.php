<?php 

class Produto{
    private $conn;

    public function __construct() {
        $conn = new Conexao();
        $this->conn = $conn;
    }

    public function inserir(){
        $sql = "INSERT INTO produtos (descricao,tipo,unidade_medida,quantidade,valor)
        VALUES('{$_POST['descricao']}','{$_POST['tipo']}','{$_POST['unidade_medida']}','{$_POST['quantidade']}','{$_POST['valor']}')";

        $this->conn->getconexao()->query($sql);
    }

    public function listar(){
        $sql = "SELECT * FROM produtos";

        $result = $this->conn->getconexao()->query($sql);

        $qtd = $result->rowCount();

        if($qtd>0){
            echo'<table class="table">
                <thead class="text-center"> 
                    <tr>
                        <th scope="col"> ID </th>
                        <th scope="col"> Descrição </th>
                        <th scope="col"> Tipo</th>
                        <th scope="col"> Unidade de medida </th>
                        <th scope="col"> Quantidade </th>
                        <th scope="col"> Valor </th>
                        <th scope="col" colspan="2"> Ações </th>
                    </tr>
                </thead>';
                while ($row = $result->fetch(PDO::FETCH_LAZY)) {
                    print"<tbody class='table-group-divider text-center'>";
                        print"<tr>";
                            print ("<td>". $row->id_produto ."</td>");
                            print ("<td>". $row->descricao ."</td>");
                            print ("<td>". $row->tipo ."</td>");
                            print ("<td>". $row->unidade_medida ."</td>");
                            print ("<td>". $row->quantidade ."</td>");
                            print ("<td>". $row->valor ."</td>");
                            print ("<td> 
                                <button onclick=\"location.href='?page=editar&id=".$row->id_produto." ';\"class= 'btn btn-success me-3'> Editar</button>");
                            
                               print("<button onclick=\"if(confirm('Deseja Excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id_produto."';}
                               else{false;}\" class='btn btn-danger'> Excluir </button>
                               </td>");  //fim do <td> iniciado na linha 46°
                    


                }
            print"</table>";
        }
        else{
            print"<p class='alert alert-danger'>Não há resultados para exibir</p>";
        }
    }
    public function atualizar(){
        $descricao = $_POST['descricao'];
        $tipo = $_POST['tipo'];
        $unidade_medida = $_POST['unidade_medida'];
        $quantidade = $_POST['quantidade'];
        $valor = $_POST['valor'];

        $sql = "UPDATE  produtos SET
        descricao = '{$descricao}',
        tipo = '{$tipo}',
        unidade_medida = '{$unidade_medida}',
        quantidade = '{$quantidade}',
        valor = '{$valor}'
        WHERE id_produto = ".$_REQUEST["id"];
        $this->conn->getConexao()->query($sql);
    }
    public function excluir(){
        $sql = "DELETE FROM produtos WHERE   id_produto=".$_REQUEST['id'];
        $this->conn->getConexao()->query($sql);
    }
}
