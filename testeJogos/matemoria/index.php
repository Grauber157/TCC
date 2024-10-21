<!---
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jogo - Escolha sua Dificuldade</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Matemória</h1>
        <p>Escolha sua dificuldade:</p>
        <div class="buttons">
            <button onclick="selecionarDificuldade('facil')">
              <a href="facil.html">Fácil</a>
            </button>
            <button onclick="selecionarDificuldade('medio')">
              <a href="medio.html">Médio</a>
            </button>
            <button onclick="selecionarDificuldade('dificil')">
              <a href="dificil.html">Difícil</a>
            </button>
        </div>
    </div>

    <script>
      function selecionarDificuldade(dificuldade) {
      if (dificuldade === 'facil') {
        window.location.href = 'facil.html';
      } else if (dificuldade === 'medio') {
        window.location.href = 'medio.html';
      } else if (dificuldade === 'dificil') {
        window.location.href = 'dificil.html';
      }
      }
    </script>
</body>
</html>
    -->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Escolha a Dificuldade</title>
    <link rel="stylesheet" href="styles/matemoria.css">
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
  <div class="container">
    <h1>Matemória</h1>
    <p>Escolha o nível de dificuldade</p>
      <div class="buttons">
        <form action="nivmatemoria.php" method="GET">
          <button type="submit" name="dificuldade" value="facil">Fácil</button>
          <button type="submit" name="dificuldade" value="medio">Médio</button>
          <button type="submit" name="dificuldade" value="dificil">Difícil</button>
        </form>
      </div>
  </div>
</body>
</html>
