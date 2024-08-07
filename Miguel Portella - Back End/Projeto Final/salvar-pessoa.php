<?php
$psa = new Pessoa();
$conn = new Palestra();



        switch($_REQUEST['acao']){
            case 'cadastrar':
                $psa->inserir();

                if($psa==true){
                    print("<script>alert('cadastrado com sucesso!')</script>");
                    print("<script>location.href='?page=listar'</script>");
                }else{
                    print("<script>alert('Não foi possível cadastrar!')</script>");
                }
                break;

            case 'editar':
                $psa->atualizar();

                if($psa==true){
                    print("<script>alert('Editado com sucesso!')</script>");
                    print("<script>location.href='?page=listar-pessoa'</script>");
                }else{
                    print("<script>alert('Não foi possível Editar!')</script>");
                }
                break;

                case'excluir':
                    $psa->excluir();
                    if($psa==true){
                        print("<script>alert('Excluido com sucesso!')</script>");
                        print("<script>location.href='?page=listar-pessoa'</script>");
                    }else{
                        print("<script>alert('Não foi possível Excluir!')</script>");
                    }
                break;
        }
