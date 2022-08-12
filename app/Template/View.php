<?php

namespace App\Template;
use App\Services\ShowAllArticlesService;

class View {

    public function __construct(string $path, array $data)
    {
        $loader = new \Twig\Loader\FilesystemLoader($path);
        $twig = new \Twig\Environment($loader, $data);
        $template = $twig->load('index.twig');
        echo $template->render($data);
    }

}