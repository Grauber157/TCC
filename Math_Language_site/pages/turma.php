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
    <link href="../styles/class.css" rel="stylesheet">
    <link href="../styles/cabeça.css" rel="stylesheet">
    <link href="../styles/fonts.css" rel="stylesheet">
    <link href="../styles/media.css" rel="stylesheet">
    <link rel="shortcut icon" type="imagex/png" href="../Material/images/favicon.ico">
    <title>Math Language - Turmas</title>
</head>
<body>
    
    <?php include '../php/include/menu.php'; ?>

    <h1>Turmas</h1>
    
    <main class="dashboard">
        <section class="ranking">
            <h2>Top 20 Turmas</h2>
            <ul>
                <li><span>clan 1</span><span>2000</span></li>
                <li><span>clan 1</span><span>2000</span></li>
                <li><span>clan 1</span><span>2000</span></li>
                <li><span>clan 1</span><span>2000</span></li>
                <li><span>clan 1</span><span>2000</span></li>
                <li><span>clan 1</span><span>2000</span></li>
                <li><span>clan 1</span><span>2000</span></li>
                <li><span>clan 1</span><span>2000</span></li>
                <li><span>clan 1</span><span>2000</span></li>
                <li><span>clan 1</span><span>2000</span></li>
                <li><span>clan 1</span><span>2000</span></li>
                <li><span>clan 1</span><span>2000</span></li>
                <li><span>clan 1</span><span>2000</span></li>
                <li><span>clan 1</span><span>2000</span></li>
                <li><span>clan 1</span><span>2000</span></li>
                <li><span>clan 1</span><span>2000</span></li>
                <li><span>clan 1</span><span>2000</span></li>
                <!-- Repetir itens conforme necessário -->
            </ul>
        </section>
        
        <section class="actions">
            <div class="turma-options">
                <a href="criarturma.php" class="btn">Criar</a>
                <a href="entrarturma.php" class="btn">Entrar</a>
            </div>
            <div class="info">
                <h3>O que são as Turmas?</h3>
                <p>...</p>
            </div>
        </section>
    </main>
    
    <?php include '../php/include/rodape.php'; ?>

</body>
</html>
