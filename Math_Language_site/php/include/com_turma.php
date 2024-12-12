<?php
    //require_once '../../core/mysql.php';
    require_once '../core/sql.php';
    require_once '../core/mysql.php';
    
    #por meio do id, identifica a turma do usuario e mostra os parcipantes logo abaixo
    $criterio = [['id', '=', $_SESSION['id']]];
    $retorno = Buscar('usuario', ['turma_codigo'], $criterio);

    #pega o nome da turma, aproveitando a já existente variavel '$retorno'
    $criterio = [['codigo', '=', $retorno[0]['turma_codigo']]];
    $nome_turma = Buscar('turma', ['nome_turma', 'administrador'], $criterio);

    #seleciona os membros da turma
    $sql = 'SELECT u.nome_usuario, SUM(uj.pontuacao_jogo) AS pontuacao, u.ano_escolar AS escolaridade, u.instituicao_escolar AS escola
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
                <h2>
                    <?php
                        echo $nome_turma[0]['nome_turma'];
                    ?>
                </h2>
                    <thead>
                        <tr>
                            <td><strong>Nomes</strong></td>
                            <td><strong>Pontuação</strong></td>
                            <td><strong>Escolaridade</strong></td>
                            <td><strong>Instituição</strong></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            for($x = 0; $x < count($membros); $x++)
                            {
                                echo '<tr><td>'.$membros[$x]['nome_usuario'].'</td><td>'.$membros[$x]['pontuacao'].'</td><td>'.$membros[$x]['escolaridade'].'</td><td>'.$membros[$x]['escola'].'</td></tr>';
                            }
                        ?>
                    </tbody>
                </table>

            <div class="turma-options">
                <form action="../core/turma_repositorio.php" method="post">
                    <input type="hidden" name="acao" value="sair">
                    <input class="botaoAlterar" type="submit" value="Sair da Turma">
                </form>
            
            <!-- Caso o usuario seja Administrador da turma, ele pode ter a opção de deletar a turma -->
            <?php
                if($nome_turma[0]['administrador'] == $_SESSION['id'])
                {
                    echo '<form action="alterar_turma.php" method="post"><input type="hidden" name="acao" value="atualizar"><input class="botaoAlterar" type="submit" value="Alterar Dados da Turma"></form>';
                    echo '<form action="../core/turma_repositorio.php" method="post"><input type="hidden" name="acao" value="deletar"><input class="botaoAlterar" type="submit" value="Deletar Turma"></form>';
                }
            ?>
            </div>
        </section>


        