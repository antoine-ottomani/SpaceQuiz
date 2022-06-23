<!-- HEADER COMMUN À TOUTES LES PAGES -->
<header>

    <!-- PARTIE LOGO + TITRE -->
    <a class="brand" href="?page=home">
        <img class="logo" src="./public/img/utils/logo.png" />
        <p class="title-brand">SpaceQuiz</p>
    </a>



    <!-- PARTIE ICON BURGER -->
    <input class="side-menu" type="checkbox" id="side-menu" />
    <label class="burger" for="side-menu"><span class="burger-line"></span></label>

    <!-- PARTIE NAVBAR -->
    <nav class="nav">
        <ul class="menu">
            <li>
                <a href="?page=home">Accueil</a>
            </li>
            <li>
                <a href="#">Thèmes</a>
                <ul>
                    <li><a href="show_quiz">La Lune</a></li>
                    <li><a href="#">La Galaxie</a></li>
                </ul>
            </li>
            <li>
                <a href="#">Mon compte</a>
            </li>
            <li>
                <a href="?page=add_quiz">Ajout</a>
            </li>

        </ul>
    </nav>

</header>