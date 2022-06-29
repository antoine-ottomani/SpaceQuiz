<?php

//! Cette class retranscrit les informations de la table 'sp_category' de la bdd

namespace App\Model\Entity;

class Category
{

    private ?int $id;
    private ?string $theme;
    private ?string $cover;
    private ?string $description;

    // Le constructeur va renvoyer un tableau avec les propriétés définies au dessus
    public function __construct(array $arrayCategories)
    {
        if (isset($arrayCategories['id']))
            $this->id = (int) $arrayCategories['id'];

        if (isset($arrayCategories['theme']))
            $this->theme = (string) $arrayCategories['theme'];

        if (isset($arrayCategories['cover']))
            $this->cover = (string) $arrayCategories['cover'];

        if (isset($arrayCategories['description']))
            $this->description = (string) $arrayCategories['description'];
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getTheme(): ?string
    {
        return $this->theme;
    }

    public function setTheme(?string $theme): void
    {
        $this->theme = $theme;
    }

    public function getCover(): ?string
    {
        return $this->cover;
    }

    public function setCover(?string $cover): void
    {
        $this->cover = $cover;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }
}