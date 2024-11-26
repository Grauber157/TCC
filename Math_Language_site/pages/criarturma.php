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
    <link rel="stylesheet" href="../styles/forms.css">
    <link href="../styles/media.css" rel="stylesheet">
    <link rel="shortcut icon" type="imagex/png" href="../Material/images/favicon.ico">
    <title>Math Language - Criar Turma</title>
</head>
<body>
    
    <?php include '../php/include/menu.php'; ?>

    <main class="create-class">
        <aside class="form-aside">
            <div class="form-container">
            <p class="title">Criar uma Turma</p>
            <!-- action="turma_repositorio.php" -->
            <form class="form" action="../core/turma_repositorio.php" method="post">
                <div class="input-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome_turma" id="nome_turma" placeholder="Nome da Turma">
                </div>
                <div class="input-group">
                    <label for="password">Senha</label>
                    <input type="password" name="senha" id="senha" placeholder="Senha da Turma (min 8 caracteres)">
                </div>
                <!-- valor que escolherá a ação do arquivo 'turma_repositorio.php' -->
                <input type="hidden" name="acao" value="criar">
                <input class="sign" type="submit" value="Criar">
            </form>
            <p class="signup">Quer fazer parte de uma turma?
                <a rel="noopener noreferrer" href="entrarturma.php" class="">Entrar em uma turma</a>
            </p>
        </div>
    </aside>
    </main>

    <?php include '../php/include/rodape.php'; ?>

</body>
</html>
