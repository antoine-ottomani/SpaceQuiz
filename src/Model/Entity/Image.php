<?php

//! Cette class retranscrit les informations de la table 'sp_image' de la bdd

namespace App\Model\Entity;

class Image
{

    private ?int $id;
    private ?string $title;
    private ?string $url;

    // Le constructeur va renvoyer un tableau avec les propriétés définies au dessus
    public function __construct(array $arrayImages)
    {
        if (isset($arrayImages['id']))
            $this->id = (int) $arrayImages['id'];

        if (isset($arrayImages['title']))
            $this->title = (string) $arrayImages['title'];

        if (isset($arrayImages['url']))
            $this->url = (string) $arrayImages['url'];
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }
}