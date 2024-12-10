<?php
    session_start();

    if(empty($_SESSION['id']))
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

    <main>
        
    </main>

    <?php include 'php/include/rodape.php'; ?>

</body>
</html>