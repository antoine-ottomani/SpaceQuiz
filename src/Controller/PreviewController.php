<?php

namespace App\Controller;

use App\Model\Manager\CategoryManager;
use SpaceQuiz\Controller;


class PreviewController extends Controller
{

    public function showPreview(): void
    {
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $previewManager = new CategoryManager();
            $singleCategory = $previewManager->getUniqueCategory($_GET['id']);


            $this->renderView('quiz/quizPreview.php', [
                'title' => 'Jouer au quiz',
                'singleCategory' => $singleCategory
            ]);
        } else {
            $this->redirectToRoute('app_task_index');
        }
    }
}