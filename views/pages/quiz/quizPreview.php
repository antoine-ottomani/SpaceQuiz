<section class="quiz-preview">

    <div class="start-area">

        <div class="cover-area">
            <img class="cover" alt="" src="<?= $data['singleCategory']->getCover(); ?>">
            <div class="overlay">
                <h1><?= $data['singleCategory']->getTheme(); ?></h1>
            </div>
        </div>

        <div class="description-area">
            <p>Testez vos connaissances</p>
            <a class="play" href="?page=quiz_content&id=">Jouer</a>
        </div>

    </div>

</section>