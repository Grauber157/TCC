<?php
    $valor = $_GET["escolha"];
    $resultado = $_GET["resultado"];

    if ($valor == $resultado)
    {
        echo "VOCÊ ACERTOU!";
    }

    else
    {
        echo "RESULTADO ERRADO";
    }


?>

<?php
    // Verifica se há parâmetros GET
    #if(isset($_GET['parametro1']) && isset($_GET['parametro2'])) 
    #{
    #    // Acessando os parâmetros GET
    #    $parametro1 = $_GET['parametro1'];
    #    $parametro2 = $_GET['parametro2'];

    #    // Faça o que quiser com os parâmetros
    #    echo "Parametro 1: $parametro1 <br>";
    #    echo "Parametro 2: $parametro2 <br>";
    #}
?>