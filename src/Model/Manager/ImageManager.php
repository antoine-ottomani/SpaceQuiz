<?php

namespace App\Model\Manager;

use SpaceQuiz\Manager;
use App\Model\Entity\Image;

class ImageManager extends Manager
{

    public function getImages(): ?array // Retourne soit le type spécifié (array) soit null
    {
        $sql = "SELECT * FROM sq_image";
        $query = $this->connection->query($sql);
        $arrayImages = $query->fetchAll();
        if (!$arrayImages || empty($arrayImages)) {
            return null;
        }
        $allImages = [];
        foreach ($arrayImages as $image) {
            array_push($allImages, new Image($image));
        }
        return $allImages;
    }
}