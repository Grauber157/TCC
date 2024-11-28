<?php
    require_once '../core/mysql.php';
    $sql = 'SELECT u.nome_usuario, SUM(uj.pontuacao_jogo) AS pontuacao 
        FROM usuario u 
        JOIN turma AS t ON u.turma_codigo = t.codigo
        JOIN usuario_jogos AS uj ON uj.id_usuario = u.id
        WHERE u.turma_codigo = "TG77"
        GROUP BY u.nome_usuario
        ORDER BY pontuacao DESC;';
    $membros = BuscarSql($sql);
?>
<section class="actions">
            <div class="info">
            <table class="">
                    <thead>
                        <tr>
                            <td>Nome</td>
                            <td>Pontuação</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($membros as $membro)
                            {
                                echo '<td>'.$membro['nome_usuario'].'</td><td>'.$membro['pontuacao'].'</td>';
                            }
                            
                        ?>
                    </tbody>
                </table>
        </section>


        