<link rel="stylesheet" href="http://localhost:8080/TCC/Math_Language_site/styles/popup.css">

<?php
  // Verifica se a variável POST 'jogo' foi enviada
  if(isset($_POST['jogo'])){
      $jogo = $_POST['jogo'];
      $titulo = '';
      $action = '';

      switch($jogo) {
        case 'matemoria':
          $titulo = 'Matemória';
          $action = '../pages/games/matemoria/matememoria.php';
          break;
        case 'contratempo':
          $titulo = 'Contra-Tempo';
          $action = '../pages/games/contra-tempo/contra.php';
          break;
        case 'planamenteespacial':
          $titulo = 'Planamente Espacial';
          $action = '../pages/games/planamente-espacial/planamente.php';
          break;
        case 'acheox':
          $titulo = 'Ache o X';
          $action = '../pages/games/acheox/ache.php';
          break;
        default:
          $titulo = 'Jogo Desconhecido';
          $action = '#';
      }
  }
?>

<div id="popup1" class="popup">
  <div class="popup-content">
    <a href="" class="close">&times;</a> <!-- Link para fechar o pop-up -->
    <h1><?php echo isset($titulo) ? $titulo : 'Escolha o Jogo'; ?></h1>
    <p>Escolha a dificuldade</p>
    <form action="<?php echo isset($action) ? $action : '#'; ?>" method="post">
      <button class="botao" type="submit" name="dificuldade" value="facil">Fácil</button>
      <button class="botao" type="submit" name="dificuldade" value="medio">Médio</button>
      <button class="botao" type="submit" name="dificuldade" value="dificil">Difícil</button>
    </form>
  </div>
</div>
