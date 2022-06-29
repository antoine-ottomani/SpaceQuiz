<?php

namespace App\Model\Manager;

use SpaceQuiz\Manager;
use App\Model\Entity\Category;

class CategoryManager extends Manager
{

    public function getUniqueCategory(int $id): ?Category
    {

        $sql = "SELECT * FROM sq_category WHERE id = :id";
        $query = $this->connection->prepare($sql);
        $query->execute([
            'id' => $id
        ]);
        $category = $query->fetch();
        if (!$category || empty($category)) {
            return null;
        }
        return new Category($category);
    }



    public function allCategories(): ?array
    {
        $sql = 'SELECT * FROM sq_category';
        $query = $this->connection->query($sql);
        $myArray = $query->fetchAll();
        if (!$myArray || empty($myArray)) {
            return null;
        }
        $categoriesObjects = [];
        foreach ($myArray as $array) {
            array_push($categoriesObjects, new Category($array));
        }
        return $categoriesObjects;
    }
}