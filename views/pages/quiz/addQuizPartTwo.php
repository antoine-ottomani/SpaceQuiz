<section class="add-quiz">

    <!-- CONTAINER DU FORMULAIRE -->
    <div class="add-container">

        <!-- 2e formulaire : AJOUT DES INFOS DE LA TABLE ANSWER + image 'is_correct, text' -->

        <form class="form-add" method="post">
            <div class="form-header-container">
                <h1 class="form-header-title">Ajouter un quiz</h1>
            </div>

            <h2>Étape 3 : Réponses</h2>
            <input type="text" placeholder="Réponse 1" name="answer-one" />
            <input type="text" placeholder="Réponse 2" name="answer-two" />
            <input type="text" placeholder="Réponse 3" name="answer-three" />

            <input type="number" placeholder="Id de la question" name="id_question">

            <button type="submit" class="add-btn" id="btn-3">Ajouter</button>

        </form>
    </div>

</section>