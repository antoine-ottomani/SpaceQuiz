<?php

namespace App\Controller;

use SpaceQuiz\Controller;
use App\Model\Manager\QuestionManager;
use App\Model\Manager\AnswerManager;
use App\Model\Manager\ImageManager;

// Création d'une classe qui va contenir les méthodes relarives au bloc question/réponses
class QuizContainerController extends Controller
{
    // Méthode pour afficher le quiz (la question et les réponses)
    public function showQuiz(): void
    {

        //? Gère la question
        $questionManager = new QuestionManager();
        $question = $questionManager->find(1);

        //? Gère les réponses
        $answerManager = new AnswerManager();
        $answers = $answerManager->getAnswers();

        //? Gère l'image de la question 
        $imageManager = new ImageManager();
        $img = $imageManager->getImages();

        //? Gère le retour de la vue 
        $this->renderView('quiz/moonQuiz.php', [
            'title' => 'La Lune',
            'question' => $question->getContent(),
            'answers' => $answers,
            'images' => $img
        ]);
    }
}