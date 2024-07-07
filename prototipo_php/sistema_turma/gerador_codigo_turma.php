<?php
    #funcao 'chr()' para transformar numeros em 
    #string pela tabela ASCII
    $letra1 = chr(rand(65, 90));
    $letra2 = chr(rand(65, 90));
    
    $numero1 = rand(0, 9);
    $numero2 = rand(0, 9);
    
    $codigo[0] = $letra1;
    $codigo[1] = $letra2;
    $codigo[2] = $numero1;
    $codigo[3] = $numero2;
    
    #implode para juntar as letras e numeros em uma só string
    $codigo_turma = implode("", $codigo);
    
    echo $codigo_turma;
?>