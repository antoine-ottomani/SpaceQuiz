<?php

//! Cette class retranscrit les informations de la table 'sq_question' de la bdd

namespace App\Model\Entity;

class Question
{

    private int $id;
    private string $title;
    private string $illustration;
    private string $illustrationTitle;
    private string $category;

    // Le constructeur va renvoyer un tableau avec les propriétés définies au dessus
    public function __construct(?array $arrayQuestions = [])
    {
        if (isset($arrayQuestions['id']))
            $this->id = (int) $arrayQuestions['id'];
        if (isset($arrayQuestions['title']))
            $this->title = (string) $arrayQuestions['title'];
        if (isset($arrayQuestions['illustration']))
            $this->illustration = (string) $arrayQuestions['illustration'];
        if (isset($arrayQuestions['illustration_title']))
            $this->illustrationTitle = (string) $arrayQuestions['illustration_title'];
        if (isset($arrayQuestions['category']))
            $this->category = (string) $arrayQuestions['category'];
    }


    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getIllustration(): string
    {
        return $this->illustration;
    }

    public function setIllustration(string $illustration): void
    {
        $this->illustration = $illustration;
    }

    public function getIllustrationTitle(): string
    {
        return $this->illustrationTitle;
    }

    public function setIllustrationTitle(string $illustrationTitle): void
    {
        $this->illustrationTitle = $illustrationTitle;
    }

    public function getCategory(): string
    {
        return $this->category;
    }

    public function setCategory(string $category): void
    {
        $this->category = $category;
    }
}