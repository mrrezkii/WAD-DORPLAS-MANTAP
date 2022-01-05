<?php

namespace App\Http\Controllers;


use GuzzleHttp\Client;

class ArticleController extends Controller
{
    public function index()
    {
        $client = new Client;
        $results = $client->request('GET', 'https://covid19.go.id/feed/berita');

        $xml = simplexml_load_string($results->getBody(), 'SimpleXMLElement', LIBXML_NOCDATA);
        $json = json_encode($xml);
        $array = json_decode($json, true);
        $collection = collect($array);
        return view('pages.article.index', [
            'title' => 'Artikel',
            'active' => 'article',
            'datas' => $collection
        ]);
    }
}
