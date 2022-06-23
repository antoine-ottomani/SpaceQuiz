<?php

$NbCorrectAnswer = 1;

if (isset($_POST['choice'])) {
    if ($NbCorrectAnswer == $_POST['choice']) {
        echo "Bonne réponse";
    } else {
        echo "Mauvaise réponse";
    }
} else {
    echo "Il faut sélectionner une réponse !";
}
