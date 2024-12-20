<?php
    #puxa funções necessarias 'Buscar()'
    require_once 'mysql.php';

    function GerarCodigo()
    {
        #funcao 'chr()' para transformar numeros em 
        #string pela tabela ASCII
        $end = true;
        while($end)
        {
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
            
            #criterio para a funcao Buscar()
            $criterio = [['codigo', '=', $codigo_turma]];
            #validacao do codigo gerado
            $retorno = Buscar('turma', ['codigo'], $criterio);
            
            if(!count($retorno) > 0)
            {
                $end = false;
            }

            $end = false;
        }
        return $codigo_turma;
    }
?>