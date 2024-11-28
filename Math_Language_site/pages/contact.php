<?php
    session_start();

    if(empty($_SESSION['id']))
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
    
    <main>
        <h1>Contatos</h1>

        <div class="contacts-container">
            <div class="contact-card">
                <img src="../Material/images/user1.jpg" alt="Usuário 1" class="contact-image">
                <h2>Usuário 1</h2>
                <p>Descrição do usuário 1. Ele é responsável por XYZ.</p>
            </div>
            <div class="contact-card">
                <img src="../Material/images/user2.jpg" alt="Usuário 2" class="contact-image">
                <h2>Usuário 2</h2>
                <p>Descrição do usuário 2. Ele é especialista em ABC.</p>
            </div>
            <div class="contact-card">
                <img src="../Material/images/user3.jpg" alt="Usuário 3" class="contact-image">
                <h2>Usuário 3</h2>
                <p>Descrição do usuário 3. Ela cuida de LMN.</p>
            </div>
            <div class="contact-card">
                <img src="../Material/images/user4.jpg" alt="Usuário 4" class="contact-image">
                <h2>Usuário 4</h2>
                <p>Descrição do usuário 4. Ele é responsável pelo suporte técnico.</p>
            </div>
        </div>
    </main>
        
    <?php include '../php/include/rodape.php'; ?>

</body>
</html>
