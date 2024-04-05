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
                $n1 = rand(1, 10);
                $n2 = rand(1, 10);
                $resul = $n1 + $n2;
                
                for ($i=0; $i < 3; $i++) 
                { 
                    
                }

                $escolha = 0;
                
                echo "{$n1} + {$n2} = X";


            ?>
        </p>
    </h1>

    <form action="exe1.php" method="get">
        <button type="submit" name="escolha">
            <?php 
                echo $resul;
                $escolha = 1;
            ?>
        </button>
        <button type="submit" name="escolha">
            <?php 
                echo $resul-5;
                $escolha = 2;
            ?>
        </button>
        <button type="submit" name="escolha">
            <?php 
                echo $resul-1;
                $escolha = 3;
            ?>
        </button>
        <button type="submit" name="escolha">
            <?php 
                echo $resul+4;
                $escolha = 4;
            ?>
        </button>
    </form>
</body>
</html>