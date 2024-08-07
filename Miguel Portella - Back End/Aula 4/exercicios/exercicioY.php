<?php

    while(true){ #nome
        $nome = readline("Digite seu nome: ");
        if (mb_strlen($nome) < 3){
            echo"Digite um nome válido! \n";
        }
        else{
            break;
        }
    } 
    while(true){ #idade
        $idade = readline("Digite sua idade: ");
        if($idade < 0 or $idade > 150){
            echo "Digite uma idade válido! \n";
        }
        else{
            break;
        }
    }
    while(true){ #salário
        $salario = readline("Digite seu salário: ");
        if($salario < 0){
            echo    "Digite um valor válido!\n";
        }
        else{
            break;
        }
    }
    while(true){ #sexo
        $sexo = readline("Digite seu sexo (m para masculino e f para feminino): ");
        if(strtolower($sexo) != "f" and strtolower($sexo) != "m"){
            echo "Digite um valor válido! \n";
        }
        else{
            if($sexo == 'm'){
                $sexo = 'Masculino';
            }
            else{
                $sexo = 'Feminino';
            }
            break;
        }
    }
    while(true){ #Estado Civil
        $estadocivil = readline("Digite seu estado civil: ");
        if(strtolower($estadocivil) != "solteiro" and strtolower($estadocivil) != "casado" and strtolower($estadocivil) != "viúvo" and strtolower($estadocivil) != "divorciado"){
            echo "Digite um valor válido! \n";
        }
        else{
            break;
        }
    }
echo "Você é $nome, tem $idade anos, seu salário é de R$$salario, seu sexo é o $sexo e eu estado civil é $estadocivil ";
