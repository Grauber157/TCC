<?php
    //$_POST['resultado'];
    $_POST['escolha'];

    if ($_POST['escolha'] == null)
    {
        echo "VALOR NULO";
        var_dump($_POST['escolha']);
    }
    else
    {
        echo "HÁ VALOR";
        var_dump($_POST['escolha']);
    }
    
?>