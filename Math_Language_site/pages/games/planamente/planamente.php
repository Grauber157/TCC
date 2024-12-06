<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Planamente Espacial</title>
    <link rel="shortcut icon" type="imagex/png" href="../../../Material/images/favicon.ico">
</head>
<body>
    <?php
    // Verificar se a dificuldade foi enviada
    if (isset($_POST['dificuldade'])) {
        $dificuldade = $_POST['dificuldade']; // Receber dificuldade via POST
        include 'interface.php'; // Carregar interface
    } else {
        echo "<h1>Nenhuma dificuldade selecionada</h1>";
    }
    ?>
</body>
</html>