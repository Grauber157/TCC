<?php
    session_start();

    if(empty($_SESSION['login']))
    {
      header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/cabeça.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/contact.css">
    <link href="../styles/fonts.css" rel="stylesheet">
    <link href="../styles/media.css" rel="stylesheet">
    <link rel="shortcut icon" type="imagex/png" href="../Material/images/favicon.ico">
    <title>Math Language</title>
</head>
<body>

    <?php include '../php/include/menu.php'; ?>
    
        <ul>
            <a href="home.php"><li>Home</li></a>
            <a href="games.php"><li>Jogos</li></a>
            <a href="cont.php"><li>Conteúdos</li></a>
            <a href="turma.php"><li>Turmas</li></a>
            <a href="contact.php"><li>Contatos</li></a>
            <!-- teste de $_SESSION -->
            <a href="#" id="inscreva-se-btn"><li><?php echo "<h3>" . $_SESSION['login'] . "</h3>"; ?></li></a>
        </ul>
        
    </header>
    <main>
        <h1>Contatos</h1>
    </main>
        
    <?php include '../php/include/rodape.php'; ?>

</body>
</html>