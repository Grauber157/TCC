<link rel="stylesheet" href="../styles/popup.css">

<div id="popup1" class="popup">
    <div class="popup-content">
        <a href="#" class="close">&times;</a> <!-- Link para fechar o pop-up -->
        <h2>Escolha a dificuldade</h2>
        <form action="../pages/games/matememoria.php" method="post">
            <button type="submit" name="dificuldade" value="facil">Fácil</button>
            <button type="submit" name="dificuldade" value="medio">Médio</button>
            <button type="submit" name="dificuldade" value="dificil">Difícil</button>
        </form>
    </div>
</div>