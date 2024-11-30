<link rel="stylesheet" href="http://localhost:8080/TCC/Math_Language_site/styles/popup.css">

<div id="popup1" class="popup">
    <div class="popup-content">
        <a href="#" class="close">&times;</a> <!-- Link para fechar o pop-up -->
        <h1>Matemória</h1>
        <p>Escolha a dificuldade</p>
        <form action="../pages/games/matemoria/matememoria.php" method="post">
            <button type="submit" name="dificuldade" value="facil">Fácil</button>
            <button type="submit" name="dificuldade" value="medio">Médio</button>
            <button type="submit" name="dificuldade" value="dificil">Difícil</button>
        </form>
    </div>
</div>