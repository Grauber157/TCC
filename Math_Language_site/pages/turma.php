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
            <h2>Top 10 Turmas</h2>
                <?php
                    $sql = "SELECT t.codigo, t.nome_turma, SUM(j.pontuacao_jogo) pontuacao_total 
                        FROM turma t
                        left join usuario u on u.turma_codigo = t.codigo
                        left join usuario_jogos j on j.id_usuario = u.id
                        GROUP BY t.codigo, t.nome_turma
                        ORDER BY 3 DESC";
                    $turmas = BuscarSql($sql);
                    $x = 0;
                    foreach ($turmas as $turma):
                        if($x < 10)
                        {
                            echo '<li><span><strong>'.$turma["codigo"].' / '.$turma['nome_turma'].' / '.$turma['pontuacao_total'].'</strong></span></li>';
                            $x++;
                        }
                        else
                        {
                            break;
                        }

                    endforeach;
                ?>
                <!-- Repetir itens conforme necessário -->
        </section>
        <?php
            #por meio do id, identifica a turma do usuario e os mostra logo abaixo
            $criterio = [['id', '=', $_SESSION['id']]];
            $retorno = Buscar('usuario', ['turma_codigo'], $criterio);
            #sem turma
            if(!isset($retorno[0]['turma_codigo']) || is_null($retorno[0]['turma_codigo']))
            {
                require_once '../php/include/sem_turma.php';
            }
            #com turma
            else
            {
                require_once '../php/include/com_turma.php';
            }
        ?>
    </main>
    
    <?php include '../php/include/rodape.php'; ?>

</body>
</html>