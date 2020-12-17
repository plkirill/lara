<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    private $news = [
        1 => [
            'title' => 'Новость 1',
        ],
        2 => [
            'title' => 'Новость 2',
        ],
    ];


    public function index()
    {

        foreach ($this->news as $id => $item) {
            $url = route('news-card', ['id' => $id]);
            echo "<div><a href='{$url}'>{$item['title']}</a></div>";
        }
        return view('news');
    }

    public function newsCard($id)
    {
        echo "Страница новости {$id}"; //Страница новости
    }
}
