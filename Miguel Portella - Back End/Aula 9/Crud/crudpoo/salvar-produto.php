<?php
$pdt = new Produto();
$conn = new Conexao();

        switch($_REQUEST['acao']){
            case 'cadastrar':
                $pdt->inserir();

                if($pdt==true){
                    print("<script>alert('cadastrado com sucesso!')</script>");
                    print("<script>location.href='?page=listar'</script>");
                }else{
                    print("<script>alert('Não foi possível cadastrar!')</script>");
                }
                break;

            case 'editar':
                $pdt->atualizar();
                if($pdt==true){
                    print("<script>alert('Editado com sucesso!')</script>");
                    print("<script>location.href='?page=editar'</script>");
                }else{
                    print("<script>alert('Não foi possível Editar!')</script>");
                }
                break;

            case 'excluir':
                $pdt->excluir();
                if($pdt==true){
                    print("<script>alert('Excluido com sucesso!')</script>");
                }else{
                    print("<script>alert('Não foi possível Excluir!')</script>");
                }
                break;
            default:
                break;
        }