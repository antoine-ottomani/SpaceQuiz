<section class="add-quiz">

    <h1>Ajouter un quiz</h1>

    <form method="post" action="">

        <div class="question-category">
            <label for="id">Catégorie de la question</label>
            <input type="category" id="category" name="category">
        </div>

        <div class="question-title">
            <label for="content">Titre de la question</label>
            <input type="text" id="title" name="content">
        </div>

        <div class="answer-one">
            <label for="answer-one">Réponse 1</label>
            <input type="text" id="answer-one" name="answer-one">
        </div>

        <div class="answer-two">
            <label for="answer-two">Réponse 2</label>
            <input type="text" id="answer-two" name="answer-two">
        </div>

        <div class="answer-three">
            <label for="answer-three">Réponse 3</label>
            <input type="text" id="answer-three" name="answer-three">
        </div>

        <div class="question_id">
            <label for="question_id">Id réponses -> question</label>
            <input type="number" id="question_id" name="question_id">
        </div>


        <div class="question-image">
            <label for="image-question">Insérer une image</label>
            <input type="file" id="file" name="image-question">
        </div>

        <button type="submit" class="btn-add">Ajouter</button>

    </form>

</section>