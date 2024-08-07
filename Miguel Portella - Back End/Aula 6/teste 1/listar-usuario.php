<h1 class="d-flex justify-content-center mt-2 mb-2">
  Listar Usuários
</h1>

<?php

$sql = "SELECT * FROM usuario";

$result = mysqli_query($conn, $sql);

$quant = $result->num_rows; // pega quantidade de linhas do resultado
//num_rows = executa a quantidade de linhas que tem no banco de dados

if ($quant > 0) {

  print "<table class='table table-hover table-striped table-bordered'>";
  print("<tr class='text-center'>");
  print("<th> ID </th>");
  print("<th> Nome </th>");
  print("<th> E-mail </th>");
  print("<th> Data de Nascimento </th>");
  print("<th> Ações </th>");
  print("</tr>");
  while ($row = $result->fetch_object()) {
    print("<tr class='text-center'>");
    print("<td>" . $row->id_usuario . "</td>");
    print("<td>" . $row->nome . "</td>");
    print("<td>" . $row->email . "</td>");
    print("<td>" . date("d/m/Y", strtotime($row->data_nasc)) . "</td>");
    print("<td><button onclick=\"location.href='?page=editar&id=".$row->id_usuario."';\" class='btn btn-success'> Editar </button></td>");
    print("</tr>");
    }
    print "</table>";
  
}
