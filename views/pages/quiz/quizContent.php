<section class="quiz-container">

    <h2 class="title-question"><?= $data['question']; ?></h2>

    <div class="quiz-card">

        <div class="quiz-form">

            <form method="post" action="">
                <ul class="choices">
                    <?php foreach ($data['answers'] as $key => $answer) { ?>
                        <li><input class="answer" name="choice" type="radio" /><?= $answer->getText(); ?></li>
                    <?php } ?>
                </ul>
                <div class="next-question">
                    <input name="submit" type="submit" class="submit-answer" value="Valider">
                    <i class="fa-solid fa-circle-arrow-right fa-2x"></i>
                </div>
            </form>

        </div>

        <div class="quiz-img">
            <img class="thumbnail" src="./public/img/uploads/empreinte.jpeg" />
        </div>

    </div>

</section>