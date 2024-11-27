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
    <link href="../styles/class.css" rel="stylesheet">
    <link href="../styles/cabeça.css" rel="stylesheet">
    <link href="../styles/fonts.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/forms.css">
    <link href="../styles/media.css" rel="stylesheet">
    <link rel="shortcut icon" type="imagex/png" href="../Material/images/favicon.ico">
    <title>Math Language - Entrar em Turma</title>
</head>
<body>

    <?php include '../php/include/menu.php'; ?>

    <main>
        <aside class="form-aside">
            <div class="form-container">
            <p class="title">Entrar em uma Turma</p>
            <form class="form" action="../php/entrar_turma.php" method="post">
                <div class="input-group">
                    <label for="codigo">Codigo</label>
                    <input type="text" name="cod_turma" id="cod_turma" placeholder="Codigo da Turma">
                </div>
                <div class="input-group">
                    <label for="password">Senha</label>
                    <input type="password" name="senha" id="senha" placeholder="Senha da Turma (min 8 caracteres)">
                </div>
                <input class="sign" type="submit" value="Entrar">
            </form>
            <p class="signup">Nao esta em nenhuma turma?
                <a rel="noopener noreferrer" href="criarturma.php" class="">Crie uma turma</a>
            </p>
        </div>
    </aside>
    </main>
    
    <?php include '../php/include/rodape.php'; ?>

</body>
</html>
