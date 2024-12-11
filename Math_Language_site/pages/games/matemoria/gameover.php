<?php
    session_start();
    require_once '../../../php/include/funcoes.php';
    require_once '../../../core/sql.php';
    require_once '../../../core/mysql.php';
    require_once '../../../core/conexao_mysql.php';
    
    $pontuacao = $_POST['pontuacao'];
    Inserir('usuario_jogos', ['id_usuario' => $_SESSION['id'], 'id_jogo' => 1, 'pontuacao_jogo' => $pontuacao]);

    header('Location: ../../games.php');
    exit;
?>