<?php

namespace App\Model\Manager;

use SpaceQuiz\Manager;
use App\Model\Entity\Answer;

class AnswerManager extends Manager
{

    public function getAnswers(int $id): ?array // Retourne soit le type spécifié (array) soit null
    {
        $sql = 'SELECT text FROM sq_answer WHERE sq_answer.id_question = :id';
        $query = $this->connection->prepare($sql);
        $query->execute([
            'id' => $id


        ]);

        $arrayAnswers = $query->fetchAll();
        if (!$arrayAnswers || empty($arrayAnswers)) {
            return null;
        }
        $allAnswers = [];
        foreach ($arrayAnswers as $answer) {
            array_push($allAnswers, new Answer($answer));
        }
        return $allAnswers;
    }
}