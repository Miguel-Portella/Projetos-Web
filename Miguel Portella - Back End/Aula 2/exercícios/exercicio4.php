<?php

$nota1 = readline("Digite a primeira nota: ");
$nota2 = readline("Digite a segunda nota: ");
$nota3 = readline("Digite a terceira nota: ");
$nota4 = readline("Digite a quarta nota: ");

$media = ($nota1 + $nota2 + $nota3 + $nota4)/4;


if ($media >= 9) {
    echo "O aluno foi aprovado com disinção com média ". $media;
}
elseif ($media >= 6) {
    echo "O aluno foi aprovado com média ". $media;
}
elseif($media < 6 and $media > 3) {
    echo "O aluno está em recuperação com média ". $media;
}
else{
    echo "O aluno foi reprovado com média ". $media;
}

