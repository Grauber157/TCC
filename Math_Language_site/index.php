<?php
    session_start();

    //if(empty($_SESSION['login']))
    //{
        //header("Location: pages/login.php");
    //}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css"> 
    <link rel="stylesheet" href="styles/cabeça.css">
    <link href="styles/fonts.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/media.css">
    <link rel="shortcut icon" type="imagex/png" href="Material/images/favicon.ico">
    <title>Math Language</title>
</head>
<body>

    <?php include 'php/include/menu.php'; ?>

    <main>
        <aside>
            <h2><span>Faça parte</span></h2>
            <h2>do Math Language</h2>
            <p>
                Math Language é um Trabalho de Conclusão de Curso com o objetivo de facilitar e reforçar a aprendizagem da matemática básica no Brasil, por meio de mini-jogos interativos, visando o interesse e o incentivo ao conhecimento. Aqui você terá uma jornada extraordinária, se divertindo com nosso conteúdo, explorando o mundo da matemática e ainda assim aprendendo conceitos fundamentais para o nosso dia a dia.
            </p>
        </aside>
        <article>
            <img src="#" alt="">
        </article>
    </main>

    <?php include 'php/include/rodape.php'; ?>

</body>
</html>