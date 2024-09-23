<?php
    //Inicia uma sessão no PHP com os seguintes parâmetros
    if(session_status() != PHP_SESSION_ACTIVE);
    {
        session_cache_expire(60); // 60 minutos
        session_start();
    }
?>