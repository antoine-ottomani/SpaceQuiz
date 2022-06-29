<?php

//! Ce fichier est le contrôleur pour la gestion des
//! des pages globales du site (accueil, contact, à propos ...)

namespace App\Controller;

use App\Model\Manager\CategoryManager;
use SpaceQuiz\Controller;


class AppController extends Controller
{

    public function home(): void
    {
        $previewManager = new CategoryManager();
        $categoryList = $previewManager->allCategories();

        $this->renderView('app/home.php', [
            'title' => 'Accueil',
            'listCategory' => $categoryList
        ]);
    }
}