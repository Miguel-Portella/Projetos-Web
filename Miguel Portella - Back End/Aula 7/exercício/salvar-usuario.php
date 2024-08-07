<?php


        switch ($_REQUEST['acao']) {
            case "cadastrar":
                $nome = $_POST['nome'];
                $cpf = $_POST['cpf'];
                $data_nasc = $_POST['data_nasc'];
                $sexo = $_POST['sexo'];
                $est_civil = $_POST['est_civil'];
                $observacao = $_POST['observacao'];

                $sql = "INSERT INTO user1 (nome, cpf, data_nasc, sexo, est_civil, observacao)
                        VALUES
                        ('$nome', '$cpf', '$data_nasc', '$sexo', '$est_civil', '$observacao')";
                    $result = $conn->query($sql);
                if ($result == true) {
                    print "<script>alert('Cadastrado com sucesso!');</script>";
                    print "<script>location.href='?page=listar';</script>";
                } else {
                    echo "<script>alert('Não foi possível cadastrar!');</script>";
                    echo "<script>location.href='?page=salvar';</script>";
                }
                break;

            case "editar":
                $nome = $_POST['nome'];
                $cpf = $_POST['cpf'];
                $data_nasc = $_POST['data_nasc'];
                $sexo = $_POST['sexo'];
                $est_civil = $_POST['est_civil'];
                $observacao = $_POST['observacao'];

                $sql = "UPDATE user1 SET
                        nome = '$nome',
                        cpf = '$cpf',
                        data_nasc = '$data_nasc',
                        sexo = '$sexo',
                        est_civil = '$est_civil',
                        observacao = '$observacao'
                        WHERE user_id = ".$_REQUEST["id"];


                $result = $conn->query($sql);

                if ($result == true) {
                    print "<script>alert('Editado com sucesso!');</script>";
                    print "<script>location.href='?page=listar';</script>";
                } else {
                    echo "<script>alert('Não foi possível editar!');</script>";
                    echo "<script>location.href='?page=listar';</script>"; // Redirecionar para a listagem em caso de erro
                }
                break;

            case "excluir":
                $sql = "DELETE FROM user1 WHERE user_id =  ".$_REQUEST["id"];
                $result = $conn->query($sql);

                if($result == true){
                    print "<script>alert('Excluído com sucesso!');</script>";
                    print "<script>location.href='?page=listar';</script>";
                } else {
                    echo "<script>alert('Não foi possível excluir!');</script>";
                    echo "<script>location.href='?page=listar';</script>"; // Redirecionar para a listagem em caso de erro
                }
                break;

            default:
                echo "Ação não reconhecida.";
                break;
        }
