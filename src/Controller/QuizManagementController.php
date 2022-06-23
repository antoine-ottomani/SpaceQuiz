<?php

namespace App\Controller;

use App\Model\Entity\Answer;
use SpaceQuiz\Controller;
use App\Model\Entity\Question;
use App\Model\Manager\QuizManager;

// Création d'une classe va permettre d'ajouter, éditer et supprimer un quiz
class QuizManagementController extends Controller
{
    // Méthode pour ajouter un quiz
    public function add(): void
    {
        if (isset($_POST) && !empty($_POST)) {
            $quizManager = new QuizManager();
            $quizManager->add(new Question($_POST), new Answer($_POST));
            $this->redirectToRoute('home');
        }
        $this->renderView('quiz/addQuiz.php', [
            'title' => 'Ajouter un quiz'
        ]);
    }
}