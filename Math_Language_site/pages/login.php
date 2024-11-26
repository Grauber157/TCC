<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../styles/cabeça.css" rel="stylesheet">
    <link href="../styles/forms.css" rel="stylesheet" >
    <link href="../styles/fonts.css" rel="stylesheet">
    <link href="../styles/media.css" rel="stylesheet">
    <link rel="shortcut icon" type="imagex/png" href="../Material/images/favicon.ico">
    <title>Math Language</title>
</head>
<body>
    <header>
        <div id="title">
            <h1 class="title-h1">Math</h1>
            <h1>Language</h1>
        </div>
    </header>
    <main>
        <aside class="form-aside">
            <div class="form-container">
            <p class="title">Conectar-se</p>
            <!-- action="" para acionar o repositorio -->
            <form class="form" action="../core/usuario_repositorio.php" method="post">
                <div class="input-group">
                    <label for="username">Login</label>
                    <input type="text" name="email" id="email" placeholder="Email ou Nickname">
                </div>
                <div class="input-group">
                    <label for="password">Senha</label>
                    <input type="password" name="senha" id="password" placeholder="Senha">
                </div>
                <!-- input type='hidden' para enviar a acao -->
                <input type="hidden" name="acao" value="login">
                <input class="sign" type="submit" value="Login">
            </form>
            <p class="signup">Não tem conta?
                <a rel="noopener noreferrer" href="cad.php" class="">Cadastre-se</a>
            </p>
        </div>
    </aside>
    <article art-container>
        <div class="img">
            <img src="#" alt="">
        </div>
    </article>
    </main>

    <?php include '../php/include/rodape.php'; ?>

</body>
</html>