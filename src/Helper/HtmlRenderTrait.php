<?php

declare(strict_types=1);

namespace Alura\Mvc\Helper;

trait HtmlRenderTrait
{
    private function renderTemplate(string $view, array $params = [])
    {
        // extract($context);
        // ob_start();

        $templatepath = __DIR__ . '/../../views/';

        $twig = new \Twig\Environment(
            new \Twig\Loader\FilesystemLoader($templatepath)
        );

        echo $twig->render($view, $params);
        // require_once $templatepath . $templateName . '.php';
        // return ob_get_clean();
    }
}