<?php

namespace App\Model\Manager;

use SpaceQuiz\Manager;
use App\Model\Entity\Question;
use App\Model\Entity\Category;
use App\Model\Entity\Answer;


class QuizManager extends Manager
{
    public function add(Question $arrayQuestions, Category $arrayCategories): void
    {
        //! PARTIE TABLE QUESTIONS
        $newQuestion = 'INSERT INTO sq_question (title, illustration, illustration_title, category) 
                        VALUES (:title, :illustration, :illustration_title, :category)';

        $query = $this->connection->prepare($newQuestion);

        $query->execute([
            'title'              => $arrayQuestions->getTitle(),
            'illustration'       => $_FILES['illustration']['name'],
            'illustration_title' => $arrayQuestions->getIllustrationTitle(),
            'category'           => $arrayQuestions->getCategory()
        ]);

        //! PARTIE TABLE CATEGORY
        $newCategory = 'INSERT INTO sq_category (theme, cover, description) VALUES (:theme, :cover, :description)';

        $query = $this->connection->prepare($newCategory);

        $query->execute([
            'theme'   => $arrayCategories->getTheme(),
            'cover'    => $_FILES['cover']['name'],
            'description' => $arrayCategories->getDescription()
        ]);
    }

    public function addAnswers(Answer $arrayAnswers): void
    {
        //! PARTIE TABLE RÉPONSES
        $newAnswer = 'INSERT INTO sq_answer (text, id_question) VALUES (:text, :id_question)';
        $query = $this->connection->prepare($newAnswer);
        $query->execute([
            'text' => $_POST['answer-one'],
            'id_question' => $arrayAnswers->getIdQuestion()

        ]);
    }
}