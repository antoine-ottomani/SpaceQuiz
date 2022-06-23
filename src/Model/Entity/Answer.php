<?php

//! Cette class retranscrit les informations de la table 'sp_answer' de la bdd

namespace App\Model\Entity;

class Answer
{
    private ?int $id;
    private ?int $is_correct;
    private ?string $text;


    // Le constructeur va renvoyer un tableau avec les propriétés définies au dessus
    public function __construct(array $arrayAnswers)
    {
        if (isset($arrayAnswers['id']))
            $this->id = (int) $arrayAnswers['id'];
        if (isset($arrayAnswers['is_correct']))
            $this->is_correct = (int) $arrayAnswers['is_correct'];
        if (isset($arrayAnswers['text']))
            $this->text = (string) $arrayAnswers['text'];
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getIsCorrect(): ?int
    {
        return $this->is_correct;
    }

    public function setIsCorrect(?int $is_correct): void
    {
        $this->is_correct = $is_correct;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(?string $text): void
    {
        $this->text = $text;
    }
}