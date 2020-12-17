<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private $news = [
        1 => [
            'title' => 'Категория новостей 1',
        ],
        2 => [
            'title' => 'Категория новостей 2',
        ],
    ];


    public function index()
    {

        foreach ($this->news as $id => $item) {
            $url = route('news-category', ['id' => $id]);
            echo "<div><a href='{$url}'>{$item['title']}</a></div>";
        }
        echo "Страница категорий новостей";
    }

    public function newsCategory($id)
    {
        echo " Категория новости {$id}"; //Категория новости
    }

}
