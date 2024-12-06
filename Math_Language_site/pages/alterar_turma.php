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
        #primeiro puxa o codigo da turma por meio do usuario
        $criterio = [['id', '=', $_SESSION['id']]];
        $x = Buscar('usuario', ['turma_codigo'], $criterio);
        #depois puxa as informações da turma por meio do codigo já puxado anteriormente
        $criterio = [['codigo', '=', $x[0]['turma_codigo']]];
        $retorno = Buscar('turma', ['nome_turma', 'descricao_turma'], $criterio);
    ?>
    <main>
        <aside class="form-flex">
            <div class="form-container">
                <p class="title">Alterar dados</p>
                <form class="form" action="../core/turma_repositorio.php" method="post">


                    <div class="input-group">
                        <label for="surname">Nome da Turma</label>
                        <input type="text" name="nome" id="surname" placeholder="Apelido" required value="<?php echo $retorno[0]['nome_turma'] ?>">
                    </div>


                    <div class="input-group">
                        <label for="descricao">Descrição da Turma</label>
                        <textarea name="descricao" id="descricao" placeholder="Descrição"><?php echo $retorno[0]['descricao_turma'] ?></textarea>
                    </div>

                    <!-- valor para criar -->
                    <input type="hidden" name="acao" value="atualizar">
                    <!-- botao para enviar -->
                    <input class="sign" type="submit" value="Alterar">
                </form>
            </div>
        </aside>
    </main>
    
    <?php include '../php/include/rodape.php'; ?>

</body>
</html>