<?php

namespace App\Controller;

use SpaceQuiz\Controller;
use App\Model\Entity\Question;
use App\Model\Entity\Category;
use App\Model\Entity\Answer;
use App\Model\Manager\QuizManager;

// Création d'une classe qui va permettre d'ajouter, éditer et supprimer un quiz
class QuizManagementController extends Controller
{

    // Méthode pour ajouter un quiz avec categorie et question
    public function add()
    {

        // ====== ENVOI D'UNE IMAGE =======

        //! Vérifier si 'cover' existe, 
        //! Si 'illustration' existe
        if (
            isset($_FILES['cover']) &&
            isset($_FILES['illustration']) &&
            isset($_POST) && !empty($_POST)
        ) {

            $settings = [
                'allowed_extensions' => ['jpg', 'png', 'jpeg', 'gif', 'svg'],
                'max_size' => 10000000
            ];

            //! Récupère les noms / extensions des 2 images + les mets en minuscule
            $imageOneParts = explode('.', $_FILES['cover']['name']);
            $extensionImageOne = strtolower(end($imageOneParts));
            $imageTwoParts = explode('.', $_FILES['illustration']['name']);
            $extensionImageTwo = strtolower(end($imageTwoParts));



            //! Vérification de l'extension, de la taille et de l'absence d'erreur pour chaque image
            if (
                in_array($extensionImageOne, $settings['allowed_extensions']) &&
                $_FILES['cover']['size'] <= $settings['max_size'] &&
                $_FILES['cover']['error'] == 0 &&
                in_array($extensionImageTwo, $settings['allowed_extensions']) &&
                $_FILES['illustration']['size'] <= $settings['max_size'] &&
                $_FILES['illustration']['error'] == 0
            ) {
                //! Avoir un nom unique de fichier pour l'image 1
                $uniqueNameImageOne = uniqid('', true) . '.' . $extensionImageOne;
                //! Avoir un nom unique de fichier pour l'image 2
                $uniqueNameImageTwo = uniqid('', true) . '.' . $extensionImageTwo;

                //!Définir le dossier d'uploads pour toutes les images
                $uploadsDir = './public/img/uploads/';

                //! Déplace l'image 1 dans le dossier 'uploads'
                move_uploaded_file($_FILES['cover']['tmp_name'], $uploadsDir . $uniqueNameImageOne);
                //! Déplace l'image 2 dans le dossier 'uploads'
                move_uploaded_file($_FILES['illustration']['tmp_name'], $uploadsDir . $uniqueNameImageTwo);

                //! On définit le nom de l'image pour le transmettre au manager
                $_FILES['cover']['name'] = $uploadsDir . $uniqueNameImageOne;
                $_FILES['illustration']['name'] = $uploadsDir . $uniqueNameImageTwo;

                //! Partie OBJET
                $quizManager = new QuizManager();
                $quizManager->add(new Question($_POST), new Category($_POST, $_FILES));
                $this->redirectToRoute('add_quiz_part_two');
            } else {
                echo "Une erreur est survenue : mauvais type de fichier ou fichier trop lourd";
            }
        }

        $this->renderView('quiz/addQuizPartOne.php', [
            'title' => 'Ajouter un quiz'
        ]);
    }

    // Méthode pour ajouter les réponses
    public function addAnswers()
    {
        if (isset($_POST) && !empty($_POST)) {
            $quizManager = new QuizManager();
            $quizManager->addAnswers(new Answer($_POST));
            $this->renderView('quiz/addQuizPartTwo.php', [
                'title' => 'Ajouter un quiz'
            ]);
        } else {
            $this->redirectToRoute('home');
        }
    }
}