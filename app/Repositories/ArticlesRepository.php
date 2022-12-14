<?php

namespace App\Repositories;

use App\Models\ArticlesCollection;

interface ArticlesRepository
{
    public function getAll(): ArticlesCollection;
}