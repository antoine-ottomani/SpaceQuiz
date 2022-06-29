<?php

namespace SpaceQuiz;

abstract class Controller
{
    // Méthode renderView() qui va retourner une page html
    protected function renderView(string $template, array $data = []): void
    {
        View::renderView($template, $data);
    }

    protected function redirectToRoute(string $name, array $params = []): void
    {
        Router::redirectToRoute($name, $params);
    }
}
