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
    <link href="../styles/cad.css" rel="stylesheet" >
    <link href="../styles/fonts.css" rel="stylesheet">
    <link href="../styles/media.css" rel="stylesheet">
    <link rel="shortcut icon" type="imagex/png" href="../Material/images/favicon.ico">
    <title>Math Language</title>
</head>
<body>

    <?php include '../php/include/menu.php'; ?>
    <main>
        <aside class="form-flex">
        <div class="form-container">
            <p class="title">Alterar dados</p>
            <form class="form" action="../core/usuario_repositorio.php" method="post">

                <div class="input-group">
                    <label for="surname">Apelido (Nickname)</label>
                    <input type="text" name="nickname" id="surname" placeholder="Apelido" required>
                </div>

                <div class="input-group">
                    <label for="descricao">Descrição do perfil</label>
                    <textarea name="descricao" id="descricao" placeholder="Descrição"></textarea>
                </div>

                <div class="input-group">
                    <label for="name">Ano Escolar</label>
                    <select name="ano_escola" id="name">
                        <option value="6EF">6º ano Ensino Fundamental</option>
                        <option value="7EF">7º ano Ensino Fundamental</option>
                        <option value="8EF">8º ano Ensino Fundamental</option>
                        <option value="9EF">9º ano Ensino Fundamental</option>
                        <option value="Professor">Professor</option>
                    </select>
                </div>
                <!-- valor para criar -->
                <input type="hidden" name="acao" value="criar">
                <div class="input-group">
                    <label for="name">Nome da Escola</label>
                    <input type="text" name="nome_escola" id="name" placeholder="Nome da escola">
                </div>
                <!-- botao para enviar -->
                <input class="sign" type="submit" value="Alterar">
            </form>
        </div>
    </aside>
    </main>
    
    <?php include '../php/include/rodape.php'; ?>

</body>
</html>