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
    <link rel="stylesheet" href="../styles/contact.css">
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
                <img src="components/images/daniel.jpg" alt="Usuário 1" class="contact-image">
                <h2>Daniel Alves de Morais</h2>
                <p>Responsável pelo back-end e documentação.</p>
                <p>Responsável pelo conteúdos</p>
                <p>Diretor de Pesquisa.</p>
                <a href="">Instagram</a>
                <a href="https://github.com/DanielAlvesMorais">GitHub</a>
            </div>
            <div class="contact-card">
                <img src="components/images/faria.jpg" alt="Usuário 2" class="contact-image">
                <h2>Gabriel Faria Dias</h2>
                <p>Responsável pelo back-end</p>
                <p>Criação e Aplicação do Bando de Dados</p>
                <a href="">Instagram</a>
                <a href="https://github.com/Grauber157">GitHub</a>
            </div>
            <div class="contact-card">
                <img src="components/images/duardo.jpg" alt="Usuário 3" class="contact-image">
                <h2>Eduardo Pereira Xavier</h2>
                <p>Responsável pelo front-end e Design.</p>
                <p>Desenvolvimento dos jogos</p>
                <a href="">Instagram</a>
                <a href="https://github.com/Dinodup">GitHub</a>
            </div>
            <div class="contact-card">
                <img src="components/images/nicolas.jpg" alt="Usuário 4" class="contact-image">
                <h2>Nícolas Eduardo S. Almeida</h2>
                <p>Responsável pelo front-end</p>
                <p>Desenvolvimento do site</p>
                <a href="https://instagram.com/sainttcs">Instagram</a>
                <a href="https://github.com/stdudu">GitHub</a>
            </div>
        </div>
    </main>
        
    <?php include '../php/include/rodape.php'; ?>

</body>
</html>
