<?php
    $dificuldade;
    $max = 10;
    $min = 1;
    $acertos = 0;
    $vidas = 3;
    $pontuacao = 0;
    
    while($vidas > 0)
    {
        $end = true;
        $numero1 = rand($min, $max);
        $numero2 = rand($min, $max);
        $diff = rand(1, 10);
        $resultado = $numero1 + $numero2;
    
        if (rand(1,2) == 1) 
        {
            $resultado_diff = $resultado-$diff;
            
        }
        else 
        {
            $resultado_diff = $resultado+$diff;
        }
        
        //OUTPUT//
        
        echo "$numero1 + $numero2 = X\n";
        echo "$resultado\n";
        echo "$resultado_diff\n";
        $escolha = readline();
        if($escolha == $resultado)
        {
            echo "Você acertou!\n\n";
            $pontuacao += 10;
            $acertos++;
            $end = false;
        }
        else
        {
            echo "Você errou!\n";
            $vidas--;
            echo "Vidas Restantes: $vidas\n\n";
        }    
    }
    echo "kakaka mô burro\n";
    echo "Pontuação Total: $pontuacao\n";
    echo "Número Total de Acertos: $acertos\n";
?>