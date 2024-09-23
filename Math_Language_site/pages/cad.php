<?php 
  session_start();
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
    <header>
        <div id="title">
            <h1 class="title-h1">Math</h1>
            <h1>Language</h1>
        </div>
        <!--
        <ul>
            <a href="home.php"><li>Home</li></a>
            <a href="games.php"><li>Jogos</li></a>
            <a href="cont.php"><li>Conteúdo</li></a>
            <a href="turma.php"><li>Turmas</li></a>
            <a href="contact.php"><li>Contatos</li></a>
            <a href="login.php"><li>Login</li></a>
        </ul>
        -->
    </header>
    <main>
        <aside class="form-flex">
        <div class="form-container">
            <p class="title">Cadastre-se</p>
            <form class="form" action="../php/cadastro.php" method="post">
                <div class="input-group">
                    <label for="name">Nome Completo</label>
                    <input type="text" name="name" id="name" placeholder="Nome" required>
                </div>
                <div class="input-group">
                    <label for="surname">Apelido (Nickname)</label>
                    <input type="text" name="nickname" id="surname" placeholder="Apelido" required>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="password" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <label for="password">Senha</label>
                    <input type="password" name="senha" id="pass" placeholder="Senha" required>
                </div>
                <div class="input-group">
                    <label for="password">Confirme sua senha</label>
                    <input type="password" name="confirmar_senha" id="pass" placeholder="Confirme sua senha" required>
                </div>
                <div class="input-group">
                    <label for="date">Data de Nascimento</label>
                    <input class="date" type="date" name="data" id="date" placeholder="">
                </div>
                <div class="input-group">
                    <label for="name">Ano Escolar</label>
                    <select name="ano_escola" id="name">
                        <option value="6EF">6º ano Ensino Fundamental</option>
                        <option value="7EF">7º ano Ensino Fundamental</option>
                        <option value="8EF">8º ano Ensino Fundamental</option>
                        <option value="9EF">9º ano Ensino Fundamental</option>
                        <option value="1EM">1º ano Ensino Médio</option>
                        <option value="2EM">2º ano Ensino Médio</option>
                        <option value="3EM">3º ano Ensino Médio</option>
                        <option value="Professor">Professor</option>
                    </select>
                </div>
                <div class="input-group">
                    <label for="name">Nome da Escola</label>
                    <input type="text" name="nome_escola" id="name" placeholder="Nome da escola">
                </div>
                <input class="sign" type="submit" value="Cadastrar">
            </form>
            <p class="signup">Ja tem conta?
                <a rel="noopener noreferrer" href="login.php" class="">Conecte-se</a>
            </p>
        </div>
    </aside>
    </main>
    <footer>
        <div class="footer-content1">
            <div class="contact-info">
                <h3>Contato</h3>
                <p>Email: <a href="mailto:mathlanguagebri@gmail.com">mathlanguagebri@gmail.com</a></p>
                <p>Telefone: <a href="tel:+5518988136720">(18) 98813-6720</a></p>
            </div>
        </div>
        <div class="footer-bottom">
            <p id="copy">&copy; 2024 Ensino à Matemática. Todos os direitos reservados.</p>
            <div class="social-icons">
                <a href="https://github.com/Grauber157/TCC.git"><img src="../Material/images/github.png" alt="Github"></a>
                <a href="#"><img src="../Material/images/twitter.png" alt="Twitter"></a>
                <a href="https://instagram.com/mathlanguage"><img src="../Material/images/instagram.png" alt="Instagram"></a>
            </div>
        </div>
    </footer>
</body>
</html>