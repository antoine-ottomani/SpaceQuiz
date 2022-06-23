<?php

//! Ce fichier définit les routes de l'application
//! Chq clé correspond au nom d'une route
// Pour chq route -> le namespace de la classe à instancier
// Le nom de la classe à instancier
// La méthode à appeler de l'objet créé

return [
    'home' => [
        'controller' => App\Controller\AppController::class,
        'method'     => 'home'
    ],

    'quiz_preview' => [
        'controller' => App\Controller\PreviewController::class,
        'method'     => 'showPreview'
    ],

    'moon_quiz' => [
        'controller' => App\Controller\QuizContainerController::class,
        'method'     => 'showQuiz'
    ],
    'add_quiz' => [
        'controller'   => App\Controller\QuizManagementController::class,
        'method'       => 'add'
    ]

];