<?php

namespace App\Model\Manager;

use SpaceQuiz\Manager;
use App\Model\Entity\Question;
use App\Model\Entity\Answer;


class QuizManager extends Manager
{
    public function add(Question $arrayQuestions, Answer $arrayAnswers): void
    {
        //! PARTIE TABLE QUESTIONS
        $newQuestion = 'INSERT INTO sq_question (content) VALUES (:content)';
        $query = $this->connection->prepare($newQuestion);
        $query->execute([
            'content'   => $arrayQuestions->getContent()
        ]);

        //! PARTIE TABLE RÉPONSES 
        $newAnswer = 'INSERT INTO sq_answer (text) VALUES (:text)';
        $query = $this->connection->prepare($newAnswer);
        $query->execute([
            'text'        => $arrayAnswers->getText()
        ]);
    }
}