<?php
    session_start();

    if(empty($_SESSION['login']))
    {
      header("Location: pages/login.php");
    }
    //include("php/include/logout.php");
    
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

    <header>
            <div id="title">
                <h1 class="title-h1">Math</h1>
                <h1>Language</h1>
            </div>
            <div class="box_header">
            <ul>
                <a href="pages/home.php"><li>Home</li></a>
                <a href="pages/games.php"><li>Jogos</li></a>
                <a href="pages/cont.php"><li>Conteúdos</li></a>
                <a href="pages/turma.php"><li>Turmas</li></a>
                <a href="pages/contact.php"><li>Contatos</li></a>
                <?php
                    //retira o bug do login
                    if(empty($_SESSION['login']))
                    {
                        echo "<a href='pages/login.php'><li>Login</li></a>";
                        echo "<a href='pages/cad.php' id='inscreva-se-btn'><li>Nao tem conta?</li></a>";
                    }
                ?>
                <!-- teste de $_SESSION -->
                <a href="cad.php" id="inscreva-se-btn"><li><?php echo "<h3>".$_SESSION['login']."</h3>"; ?></li></a>
            </ul>
        </div>
        </header>
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