<?php
    session_start();
    require_once 'core/mysql.php';
    require_once 'core/sql.php';
    require_once 'core/conexao_mysql.php';
    
    if(empty($_SESSION['id']))
    {
      header("Location: pages/login.php");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles/style.css" rel="stylesheet"> 
    <link href="styles/cabeça.css" rel="stylesheet">
    <link href="styles/fonts.css" rel="stylesheet">
    <link href="styles/media.css" rel="stylesheet">
    <link href="styles/class.css" rel="stylesheet">
    <link rel="shortcut icon" type="imagex/png" href="Material/images/favicon.ico">
    <title>Math Language</title>
</head>
<body>

    <?php include 'php/include/menu.php'; ?>

    <main>
        <aside>
            <h2><span>Faça parte</span></h2>
            <h2>do Math Language</h2>
            <p>
                Math Language é um Trabalho de Conclusão de Curso com o objetivo de facilitar e reforçar a aprendizagem da matemática básica no Brasil, por meio de mini-jogos interativos, visando o interesse e o incentivo ao conhecimento. Aqui você terá uma jornada extraordinária, se divertindo com nosso conteúdo, explorando o mundo da matemática e ainda assim aprendendo conceitos fundamentais para o nosso dia a dia.
            </p>
        </aside>
    </main>

    <main class="dashboard">
        <section class="ranking">
            <h3>Top 10 Alunos</h3>
                <?php
                    $sql = "SELECT u.nome_usuario AS nome, SUM(j.pontuacao_jogo) AS pontuacao_total
                    FROM usuario u
                    RIGHT JOIN usuario_jogos j ON j.id_usuario = u.id
                    GROUP BY u.id
                    ORDER BY pontuacao_total DESC";

                    $turmas = BuscarSql($sql);
                    $x = 0;
                    foreach ($turmas as $turma):
                        if($x < 10)
                        {
                            echo '<li><span><strong>'.$turma["nome"].' / '.$turma['pontuacao_total'].'</strong></span></li>';
                            $x++;
                        }
                        else
                        {
                            break;
                        }

                    endforeach;
                ?>
        </section>
    </main>

    <?php include 'php/include/rodape.php'; ?>

</body>
</html>