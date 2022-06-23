<section class="quiz-container">

    <!-- ZONE D'AFFICHAGE DES NUMÉROS DES QUESTIONS -->
    <div class="current-question">Question X / Y</div>

    <!-- CONTAINER ENGLOBANT LA QUESTION/RÉPONSES ET L'IMAGE -->
    <div class="global">

        <div class="card-question">
            <h2 class="title-question"><?= $data['question']; ?></h2>

            <form method="post" action="">
                <ul class="choices">
                    <?php foreach ($data['answers'] as $key => $answer) { ?>
                        <li><input class="answer" name="choice" type="radio" value="<?= $answer->getIsCorrect(); ?>" /><?= $answer->getText(); ?></li>
                    <?php } ?>
                </ul>

                <div class="next-question">
                    <input name="submit" type="submit" class="submit-answer" value="Vérifier">
                    <a href="#" class="next"><i class="fa-solid fa-angle-right"></i></a>
                </div>
            </form>

        </div>





        <div class="card-img">
            <?php foreach ($data['images'] as $key => $image) { ?>
                <img class="thumbnail" src="<?= $image->getUrl() ?>" alt="" />
            <?php  } ?>
        </div>
    </div>

</section>