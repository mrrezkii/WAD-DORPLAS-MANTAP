<?php

namespace App\Http\Controllers;


use GuzzleHttp\Client;

class ArticleController extends Controller
{
    public function index()
    {
        return view('pages.article.index', [
            'title' => 'Artikel',
            'active' => 'article',
            'datas' => $this->getArticle()
        ]);
    }

    public function getArticle()
    {
        $client = new Client;
        $results = $client->request('GET', 'https://covid19.go.id/feed/berita');

        $xml = simplexml_load_string($results->getBody(), 'SimpleXMLElement', LIBXML_NOCDATA);
        $json = json_encode($xml);
        $array = json_decode($json, true);
        $collection = collect($array);
        return $collection;
    }
}
