<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planamete Espacial</title>
    <link rel="stylesheet" href="../../../styles/games/diff.css">
    <link rel="stylesheet" href="../../../styles/cabeça.css">
    <link rel="stylesheet" href="../../../styles/fonts.css">
    <link rel="stylesheet" href="../../../styles/media.css">
    <link rel="shortcut icon" type="imagex/png" href="../../Material/images/favicon.ico">
</head>
<body>
    <?php
    // Verificar se a dificuldade foi passada pela URL
    if (isset($_POST['dificuldade'])) {
        $dificuldade = $_POST['dificuldade'];

        // Carregar o script correspondente ao nível escolhido
        switch ($dificuldade) {
            case 'facil':
                include 'funcoes/interface.php';
                //include 'funcoes/facil.php';
                break;

            case 'medio':
              include 'funcoes/interface.php';
              //include 'funcoes/medio.php';
              break;

            case 'dificil':
              include 'funcoes/interface.php';
              //include 'funcoes/dificil.php';
              break;

            default:
                echo "<h1>Dificuldade não reconhecida</h1>";
        }
    } else {
        echo "<h1>Nenhuma dificuldade selecionada</h1>";
    }
    ?>
</body>
</html>