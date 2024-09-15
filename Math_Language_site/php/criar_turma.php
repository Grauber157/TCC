
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //session_start();
        include('../php/include/gerador_codigo_turma.php');
        echo $codigo_turma;
        //include('../php/include/conexao.php');
        
        $nome_turma = $_POST["nome"];
        $senha_turma = $_POST["senha"];
        
    ?>  
</body> 
</html> 
