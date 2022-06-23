<?php

namespace App\Model\Manager;

use SpaceQuiz\Manager;
use App\Model\Entity\Answer;

class AnswerManager extends Manager
{

    public function getAnswers(): ?array // Retourne soit le type spécifié (array) soit null
    {
        $sql = 'SELECT text FROM sq_answer';
        $query = $this->connection->query($sql);
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