<?php

namespace App\Repositories;

use App\Models\ArticlesCollection;
use App\Models\Article;


class NewsApiArticlesRepository implements ArticlesRepository
{


    public function getAll(): ArticlesCollection
    {
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', 'https://newsapi.org/v2/top-headlines?sources=techcrunch&apiKey=' . $_ENV['NEWS_API_KEY']);

        $request = file_get_contents("https://newsapi.org/v2/top-headlines?sources=techcrunch&apiKey=" . $_ENV['NEWS_API_KEY']);
        $apiResponse = json_decode($request);

        $articles = [];
        foreach ($apiResponse->articles as $article) {
            $articles[] = new Article(
                (string)$article->title,
                (string)$article->author,
                (string)$article->description,
                (string)$article->url,
                (string)$article->urlToImage
            );
        }
        return new ArticlesCollection($articles);
    }

}