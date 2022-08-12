<?php

namespace App\Services;

use App\Models\ArticlesCollection;
use App\Repositories\ArticlesRepository;
use App\Repositories\NewsApiArticlesRepository;

class ShowAllArticlesService
{
    private ArticlesRepository $articlesRepository;

    public function __construct()
    {
        $this->articlesRepository = new NewsApiArticlesRepository();
    }

    public function execute(): ArticlesCollection
    {
        return $this->articlesRepository->getAll();
    }
}