<?php
    //$nome = $_GET['nome'];
    //$idade = $_GET['idade'];
    //$salario = $_GET['salario'];
    //INSS: x-1412,00=7,5% / 1412,01- 
    $resul = $_POST['resultado'];
    $escolha = $_POST['escolha'];
    var_dump($resul);
    var_dump($escolha);
    if ($escolha == $resul)
    {
        
        echo "ta ceto";
    }
    else
    {
        echo "ta erraod";
    }
    
?>