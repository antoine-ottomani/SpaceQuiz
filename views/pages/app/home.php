<section class="home-container">

    <div class="presentation">
        <h1>Bienvenue sur SpaceQuiz, le site pour tester tes connaissances en Astronomie</h1>
    </div>

    <div class="container">

        <article class="last-quiz">
            <h2>Derniers quiz ajoutés</h2>

            <div class="slider">
                <img class="active slide" src="./public/img/cover_home/iris.jpg" alt="">
                <img class="slide" src="./public/img/cover_home/meduse.jpeg" alt="">
                <img class="slide" src="./public/img/cover_home/triangle.jpeg" alt="">
            </div>

            <div class="btn-container">
                <div class="btn-nav left"><i class="fa-solid fa-circle-arrow-left"></i></div>
                <div class="btn-nav right"><i class="fa-solid fa-circle-arrow-right"></i></div>
            </div>
        </article>

        <aside class="categories">
            <h2 class="title-aside">Explorez par catégories</h2>
            <ul>
                <?php foreach ($data['category'] as $key => $category) { ?>
                <li><a href="quiz_preview"><?= $category->getTheme(); ?></a></li>

                <?php } ?>
            </ul>
        </aside>
    </div>

</section>