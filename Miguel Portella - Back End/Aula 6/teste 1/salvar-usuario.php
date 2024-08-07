<?php 
    switch ($_REQUEST['acao']){
        case "cadastrar":
            $sql = "INSERT INTO usuario(nome,email,senha,data_nasc)
            VALUES 
            ('{$_POST['nome']}','{$_POST['email']}','{$_POST['senha']}','{$_POST['data_nasc']}')";
            
            $result = $conn->query($sql);

            if($result == true){
                print("<script>alert('Cadastrado com sucesso!')</script>");
                print("<script>location.href='?page=listar'</script>");
            }else{
                print("<script>alert('não foi possivel cadastrar!')</script>");
            }
            break;
        
        case "editar":
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $data_nasc = $_POST["data_nasc"];
                $sql = "UPDATE usuario SET
                nome = '{$nome}',
                email = '{$email}',
                senha = '{$senha}',
                data_nasc = '{$data_nasc}',
            WHERE id_usuario = ".$_REQUEST["id"];
$result = $conn->query($sql);
if($result == true){
    print("<script>alert('Cadastrado com sucesso!')</script>");
    print("<script>location.href='?page-listar'</script>");
}else{
    print("<script>alert('não foi possivel cadastrar!')</script>");
}
break;

case "excluir":
    $sql = "DELETE FROM usuario WHERE id_usuario = ".$_REQUEST["id"];
    $result = $conn->query($sql);

    if($result == true){
        print("<script>alert('Cadastrado com sucesso!')</script>");
        print("<script>location.href='?page=listar'</script>");
    }else{
        print("<script>alert('não foi possivel cadastrar!')</script>");
    }
    break;
}