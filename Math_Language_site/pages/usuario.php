<?php
    session_start();
    require_once '../core/mysql.php';
    require_once '../core/sql.php';
    require_once '../core/conexao_mysql.php';

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

    <?php 
        include '../php/include/menu.php'; 
        #puxa os dados do banco para alteracao
        $criterio = [['id', '=', $_SESSION['id']]];
        $retorno = Buscar('usuario', ['apelido_usuario', 'descricao', 'ano_escolar', 'instituicao_escolar'], $criterio);
    ?>
    <main>
        <aside class="form-flex">
        <div class="form-container">
            <p class="title">Alterar dados</p>
            <form class="form" action="../core/usuario_repositorio.php" method="post">


                <div class="input-group">
                    <label for="surname">Apelido (Nickname)</label>
                    <input type="text" name="nickname" id="surname" placeholder="Apelido" required value="<?php echo $retorno[0]['apelido_usuario'] ?>">
                </div>


                <div class="input-group">
                    <label for="descricao">Descrição do perfil</label>
                    <textarea name="descricao" id="descricao" placeholder="Descrição"><?php echo $retorno[0]['descricao'] ?></textarea>
                </div>

                <div class="input-group">
                    <label for="name">Ano Escolar</label>
                    <select name="ano_escola" id="name" >
                        <option value="6EF">6º ano Ensino Fundamental</option>
                        <option value="7EF">7º ano Ensino Fundamental</option>
                        <option value="8EF">8º ano Ensino Fundamental</option>
                        <option value="9EF">9º ano Ensino Fundamental</option>
                        <option value="Professor">Professor</option>
                        <option value="Outro">Outro</option>
                    </select>
                </div>
            
                <div class="input-group">
                    <label for="name">Nome da Escola</label>
                    <input type="text" name="nome_escola" id="name" placeholder="Nome da escola" value="<?php echo $retorno[0]['instituicao_escolar'] ?>">
                </div>

                <!-- valor para criar -->
                <input type="hidden" name="acao" value="atualizar">
                <!-- botao para enviar -->
                <input class="sign" type="submit" value="Alterar">
            </form>
        </div>
    </aside>
    <aside class="form-flex">
        <div class="form-container">
            <p class="title">Opções da conta</p>
            <!-- <a href="http://localhost/TCC/Math_Language_site/php/include/logout.php"><li>Desconectar</li></a> -->
            <li>
                <form action="../core/usuario_repositorio.php" method="post">
                    <input type="hidden" name="acao" value="logout">
                    <input type="submit" value="Desconectar">
                </form>
            </li>
            <li>
                <form action="../core/usuario_repositorio.php" method="post">
                    <input type="hidden" name="acao" value="deletar">
                    <input type="submit" value="Deletar Conta">
                </form>
            </li>
        </div>
    </aside>
    </main>
    
    <?php include '../php/include/rodape.php'; ?>

</body>
</html>