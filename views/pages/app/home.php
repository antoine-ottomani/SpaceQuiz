<section class="home-container">

    <div class="banner">
        <h1>Bienvenue sur SpaceQuiz, le site pour tester tes connaissances en Astronomie</h1>
        <div class="banner-img"></div>
        <a href="#home-ancre"><i class="fa-solid fa-chevron-down"></i></a>
    </div>

    <div class="introduction">
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, earum illum quis in maxime totam optio
            voluptates corrupti est unde, minima voluptas exercitationem, consequatur vero temporibus iure autem
            inventore
            odit.
        </p>
    </div>

    <div id="home-ancre" class="container">
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
            <h2>Explorez par catégories</h2>

            <ul>
                <?php foreach ($data['listCategory'] as $category) { ?>
                <li>
                    <a href="index.php?page=quiz_preview&id=<?= $category->getId() ?>">
                        <?= $category->getTheme() ?></a>
                </li>
                <?php }; ?>
            </ul>

        </aside>
    </div>

</section>