<?php
    #require_once '../../core/mysql.php';
    require_once '../core/mysql.php';
    
    #por meio do id, identifica a turma do usuario e os mostra logo abaixo
    $criterio = [['id', '=', $_SESSION['id']]];
    $retorno = Buscar('usuario', ['turma_codigo'], $criterio);


    #seleciona os membros da turma
    $sql = 'SELECT u.nome_usuario, SUM(uj.pontuacao_jogo) AS pontuacao 
        FROM usuario u 
        JOIN turma AS t ON u.turma_codigo = t.codigo
        JOIN usuario_jogos AS uj ON uj.id_usuario = u.id
        WHERE u.turma_codigo = "'.$retorno[0]['turma_codigo'].'"
        GROUP BY u.nome_usuario 
        ORDER BY pontuacao DESC;';
    $membros = BuscarSql($sql);
?>
<section class="actions">
            <div class="info">
            <table class="">
                <h2></h2>
                    <thead>
                        <tr>
                            <td>Nome</td>
                            <td>Pontuação</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            for($x = 0; $x < count($membros); $x++)
                            {
                                echo '<tr><td>'.$membros[$x]['nome_usuario'].'</td><td>'.$membros[$x]['pontuacao'].'</td></tr>';
                            }
                            
                        ?>
                    </tbody>
                </table>
            <div class="turma-options">
                <form action="../core/turma_repositorio.php" method="post">
                    <input type="hidden" name="acao" value="sair">
                    <input type="submit" value="sair">
                </form>
                <!-- <a href="criarturma.php" class="btn">Sair da Turma</a> -->
            </div>
        </section>


        