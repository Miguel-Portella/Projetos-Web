<?php
$plt = new Palestra();
$conn = new Conexao();


    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    $data = isset($_POST['data']) ? $_POST['data'] : '';
    $horario = isset($_POST['horario']) ? $_POST['horario'] : '';
    $vagas = isset($_POST['vagas']) ? (int) $_POST['vagas'] : 0;
    $observacao = isset($_POST['observacao']) ? $_POST['observacao'] : '';


    $db = $conn->getConexao();





        switch($_REQUEST['acao']){
            case 'cadastrar':
                $sql = "INSERT INTO palestras (nome, data, horario, vagas, observacao) VALUES (:nome, :data, :horario, :vagas, :observacao)";
                $stmt = $db->prepare($sql);
            
                $stmt->bindParam(':nome', $nome);
                $stmt->bindParam(':data', $data);
                $stmt->bindParam(':horario', $horario);
                $stmt->bindParam(':vagas', $vagas, PDO::PARAM_INT);
                $stmt->bindParam(':observacao', $observacao);
            
                if ($stmt->execute()) {
                    echo "Palestra cadastrada com sucesso!";
                } else {
                    echo "Erro ao cadastrar palestra.";
                }
                break;

            case 'editar':
                $plt->atualizar();
                if($plt==true){
                    print("<script>alert('Editado com sucesso!')</script>");
                    print("<script>location.href='?page=listar-palestra'</script>");
                }else{
                    print("<script>alert('Não foi possível Editar!')</script>");
                }
                break;

            case 'excluir':
                $plt->excluir();
                if($plt==true){
                    print("<script>alert('Excluido com sucesso!')</script>");
                    print("<script>location.href='?page=listar-palestra'</script>");

                }else{
                    print("<script>alert('Não foi possível Excluir!')</script>");
                    print("<script>location.href='?page=listar-palestra'</script>");

                }
                break;
            default:
        break;
        } 