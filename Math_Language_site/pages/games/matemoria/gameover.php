<?php
    require_once '../../../core/sql.php';
    require_once '../../../core/mysql.php';
    require_once '../../../core/usuario_repositorio.php';
    echo "funcoes";
    require_once '../../../php/include/funcoes.php';
    echo "teste";
    $pontuacao = $_POST['pontuacao'];
    echo "teste1";
    Inserir('usuario_jogos', ['id_usuario' => $_SESSION['id'], 'id_jogo' => 1, 'pontuacao_jogo' => $pontuacao]);
    echo "teste2";
?>