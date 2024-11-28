<?php
    session_start();
    require_once '../core/mysql.php';

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
            <ul>
                <?php
                    require_once '../core/conexao_mysql.php';
                    $sql = "SELECT t.codigo, t.nome_turma, SUM(j.pontuacao_jogo) pontuacao_total 
                        FROM turma t
                        left join usuario u on u.turma_codigo = t.codigo
                        left join usuario_jogos j on j.id_usuario = u.id
                        GROUP BY t.codigo, t.nome_turma
                        ORDER BY 3 DESC";
                    $turmas = BuscarSql($sql);
                    foreach ($turmas as $turma):
                        echo '<p>$turma["codigo"]</p>';
                        echo $turma['nome_turma'];
                        echo $turma['pontuacao_total'];
                    endforeach;
                ?>
                <!-- Repetir itens conforme necessário -->
            </ul>
        </section>
        
        <!-----<section class="actions">----------------CRIAR OU ENTRAR
            <div class="info">
                <h3>O que são as Turmas?</h3>
                <p>O sistema de turmas do nosso site é uma forma divertida de juntar pessoas para jogar e competir.
                    Quando você entra no site, pode criar sua própria turma ou participar de uma existente, 
                    mas só pode fazer isso uma vez. Depois de escolher, não será possível mudar de turma ou criar outra.</p>

                <p>Se você criar uma turma, será o administrador e poderá banir qualquer membro que desrespeite as regras.
                    Além disso, todas as turmas competem no ranking global, somando pontos nos jogos da plataforma. 
                    Cada turma também tem seu ranking interno, onde os membros disputam para ver quem consegue a maior pontuação.</p>

                <p>Participe da sua turma e comece a jogar para levar sua equipe ao topo dos rankings!</p>
            </div>

            <div class="turma-options">
                <a href="criarturma.php" class="btn">Criar</a>
                <a href="entrarturma.php" class="btn">Entrar</a>
            </div>
        </section>-->
        <section class="actions">
            <div class="info">
            <table class="">
                    <thead>
                        <tr>
                            <td>Nome</td>
                            <td>E-mail</td>
                            <td>Data cadastro</td>
                            <td>Ativo</td>
                            <td>Administrador</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>6</td>
                            <td>3</td>
                            <td>2</td>
                            <td>1</td>
                            <td>ola</td>
                        </tr>
                    </tbody>
                </table>
        </section>
    </main>
    
    <?php include '../php/include/rodape.php'; ?>

</body>
</html>