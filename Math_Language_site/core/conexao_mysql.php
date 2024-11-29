<?php

    function Conectar() : mysqli
    {
        $servidor = 'localhost';
        $banco = 'math_language';
        $port = 3308;
        $usuario = 'root';
        $senha = 'DIno2626';
        $conexao = mysqli_connect($servidor, $usuario, $senha, $banco, $port);

        //ERRO DE CONEXAO
        if(!$conexao)
        {
            echo 'Erro: Não foi possível conectar ao MySQL.' . PHP_EOL;
            echo 'Debugging errno: ' . mysqli_connect_errno() . PHP_EOL;
            echo 'Debugging error: ' . mysqli_connect_error() . PHP_EOL;
            return null;
        }
        return $conexao;
    }
    //Fecha a conexao
    function Desconectar($conexao)
    {
        mysqli_close($conexao);
    }
?>