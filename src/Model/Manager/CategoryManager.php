<?php

namespace App\Model\Manager;

use SpaceQuiz\Manager;
use App\Model\Entity\Category;

class CategoryManager extends Manager
{

    public function getCategories(): ?array // Retourne soit le type spécifié (array) soit null
    {
        $sql = "SELECT theme FROM sq_category";
        $query = $this->connection->query($sql);
        $arrayCategories = $query->fetchAll();
        if (!$arrayCategories || empty($arrayCategories)) {
            return null;
        }
        $allCategories = [];
        foreach ($arrayCategories as $category) {
            array_push($allCategories, new Category($category));
        }
        return $allCategories;
    }

    public function getCategoryById(): ?Category

    {

        $sql = "SELECT sq_category.theme FROM sq_question INNER JOIN sq_category ON sq_question.id_category = sq_category.id";
        $query = $this->connection->query($sql);
        $singleCategory = $query->fetch();
        if (!$singleCategory || empty($singleCategory)) {
            return null;
        }
        return new Category($singleCategory);
    }
}