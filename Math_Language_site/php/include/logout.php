<?php
    include('iniciar_sessao.php');
    //Limpa variáveis de sessão
    session_unset();

    //Destrói a sessão
    session_destroy();
    
    //Volta para página inicial
    header('Location: http://localhost/TCC/Math_Language_site/pages/login.php');

?>