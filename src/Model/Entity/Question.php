<?php

//! Cette class retranscrit les informations de la table 'sq_question' de la bdd

namespace App\Model\Entity;

class Question
{

    private int $id;
    private string $content;
    private int $id_category;

    // Le constructeur va renvoyer un tableau avec les propriétés définies au dessus
    public function __construct(?array $arrayQuestions = [])
    {
        if (isset($arrayQuestions['id']))
            $this->id = (int) $arrayQuestions['id'];
        if (isset($arrayQuestions['content']))
            $this->content = (string) $arrayQuestions['content'];
        if (isset($arrayQuestions['id_category']))
            $this->id_category = (int) $arrayQuestions['id_category'];
    }


    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getIdCategory(): int
    {
        return $this->id_category;
    }

    public function setCategory(int $id_category): void
    {
        $this->id_category = $id_category;
    }
}