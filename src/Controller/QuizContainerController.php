<?php

namespace App\Controller;

use SpaceQuiz\Controller;
use App\Model\Manager\QuestionManager;
use App\Model\Manager\AnswerManager;


// Création d'une classe qui va contenir les méthodes relarives au bloc question/réponses
class QuizContainerController extends Controller
{
    // Méthode pour afficher le quiz (la question et les réponses)
    public function showQuiz(): void
    {

        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $questionManager = new QuestionManager();
            $question = $questionManager->find($_GET['id']);

            $answerManager = new AnswerManager();
            $answer = $answerManager->getAnswers($_GET['id']);



            //? Gère le retour de la vue 
            $this->renderView('quiz/quizContent.php', [
                'title' => "Quiz",
                'question' => $question->getTitle(),
                'answers' => $answer
            ]);
        }
    }
}