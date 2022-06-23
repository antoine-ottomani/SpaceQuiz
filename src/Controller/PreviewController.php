<?php

namespace App\Controller;

use App\Model\Manager\CategoryManager;
use SpaceQuiz\Controller;


class PreviewController extends Controller
{

    public function showPreview(): void
    {

        $previewManager = new CategoryManager();
        $singleCategory = $previewManager->getCategoryById();


        $this->renderView('quiz/quizPreview.php', [
            'title' => 'Jouer au quiz',
            'test' => $singleCategory
        ]);
    }
}