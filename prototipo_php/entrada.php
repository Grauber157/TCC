<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <p>
            <?php 
                //Limpa as variáveis super-globais do PHP a cada reload da página
                //*AINDA EM TESTE*//
                unset($_GET["escolha"]);
                unset($_GET["resultado"]);

                //Gera os valores e o resultado da questão
                $n1 = rand(1, 10);
                $n2 = rand(1, 10);
                $resul = $n1 + $n2;
                
                //Estrutura de Repetição For() para randomizar as questões
                //$alternativas[0] é o resultado correto
                $alternativas[0] = $resul;
                for ($i=1; $i < 4; $i++) 
                { 
                    $alternativas[$i] = $resul - rand(1, 10);
                }

                //Embaralha as alternativas, randomizando a posição da alternativa correta
                shuffle($alternativas);

                //h1 para escrever o codígo na página
                echo "{$n1} + {$n2} = X";
            ?>
        </p>
    </h1>

    <!--ALTERNATIVAS-->
    <form action="" method="get">
        <!--RESULTADO-->
        <input type="hidden" value="<?php echo $resul; ?>" name="resultado">

        <!--BUTTON 1-->
        <input type="submit" value="<?php echo $alternativas[0]; ?>" name="escolha">

        <!--BUTTON 2-->
        <input type="submit" value="<?php echo $alternativas[1]; ?>" name="escolha">

        <!--BUTTON 3-->
        <input type="submit" value="<?php echo $alternativas[2]; ?>" name="escolha">

        <!--BUTTON 4-->
        <input type="submit" value="<?php echo $alternativas[3]; ?>" name="escolha">
    </form>

    <?php
        //'if()' e 'isset()' para verificar a existência das variáveis
        //Caso elas estejam definidas, 'isset()' resulta true, que por fim, imprime a decisão
        if (isset($_GET["escolha"]) and isset($_GET["resultado"]))
        {
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
        }
    ?>

    <p>ACERTOS: </p>

</body>
</html>