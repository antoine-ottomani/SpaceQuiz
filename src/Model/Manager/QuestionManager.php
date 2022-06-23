<?php

namespace App\Model\Manager;

use SpaceQuiz\Manager;
use App\Model\Entity\Question;

class QuestionManager extends Manager
{


    public function find(int $id): ?Question // Retourne soit le type spécifié (array) soit null
    {
        $sql = 'SELECT * FROM sq_question WHERE sq_question.id_category = :id';
        $query = $this->connection->prepare($sql);
        $query->execute([
            'id' => $id
        ]);
        $question = $query->fetch();
        if (!$question || empty($question)) {
            return null;
        }
        return new Question($question);
    }
}