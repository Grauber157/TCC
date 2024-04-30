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

                shuffle($alternativas);

                $escolha = 0;
                //h1 para escrever o codígo
                echo "{$n1} + {$n2} = X";
            ?>
        </p>
    </h1>

    <!--ALTERNATIVAS-->
    <form action="exe1.php" method="post">
        <!--BUTTON 1-->
        <button type="submit" name="escolha">
            <?php 
                echo $alternativas[0];
                $escolha = $alternativas[0];
            ?>
        </button>
        <!--BUTTON 2-->
        <button type="submit" name="escolha">
            <?php 
                echo $alternativas[1];
                $escolha = 2;
                //teste
            ?>
        </button>
        <!--BUTTON 3-->
        <button type="submit" name="escolha">
            <?php 
                echo $alternativas[2];
                $escolha = 3;
            ?>
        </button>
        <!--BUTTON 4-->
        <button type="submit" name="escolha">
            <?php 
                echo $alternativas[3];
                $escolha = 4;
            ?>
        </button>
    </form>
</body>
</html>