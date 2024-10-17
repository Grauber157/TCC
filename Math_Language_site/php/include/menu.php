<header>
    <div id="title">
        <h1 class="title-h1">Math</h1>
        <h1>Language</h1>
    </div>
    <ul>
        <a href="../index.php"><li>Home</li></a>
        <a href="games.php"><li>Jogos</li></a>
        <a href="cont.php"><li>Ensino</li></a>
        <a href="turma.php"><li>Turmas</li></a>
        <a href="contact.php"><li>Contatos</li></a>
        <!-- teste de $_SESSION -->
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
        <a href="#" id="inscreva-se-btn"><li><?php echo "<h3>" . $_SESSION['login'] . "</h3>"; ?></li></a>
        <a href="../php/include/logout.php"><li>Desconectar</li></a>
    </ul>
</header>