<section class="add-quiz">

    <!-- CONTAINER DU FORMULAIRE -->
    <div class="add-container">


        <!-- 1er formulaire : AJOUT DES INFOS DE LA TABLE CATEGORY 'theme, cover, description' -->
        <form class="form-add" method="post" enctype="multipart/form-data">

            <div class="form-header-container">
                <h1 class="form-header-title">Ajouter un quiz</h1>
            </div>

            <div class="steps">

                <div class="step-1">
                    <h2>Étape 1 : Catégorie</h2>
                    <input type="text" name="theme" placeholder="Nom de la catégorie" />
                    <input type="text" placeholder="Présenter la catégorie" name="description" />
                    <input type="file" name="cover" />
                </div>

                <div class="step-2">
                    <h2>Étape 2 : Question</h2>
                    <input type="text" name="title" placeholder="Titre de la question" />
                    <input type="file" name="illustration" />
                    <input type="text" name="illustration_title" placeholder="Nom de l'image" />
                    <input type="text" name="category" placeholder="Catégorie de la question" />
                </div>

            </div>

            <button type='submit' class="add-btn" id="btn-1">Ajouter</button>
        </form>


    </div>

</section>