<?php

namespace App\Controllers;

use App\Models\Article;
use App\Services\ShowAllArticlesService;
use App\Template\View;

class NewsController
{
    public static function index(): View
    {
        $service = new ShowAllArticlesService();
        return new View('app/Template',['articles' => $service->execute()->getAll()]);
    }
}