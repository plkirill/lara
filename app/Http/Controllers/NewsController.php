<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    private $categories = [
        1 => 'Спорт',
        2 => 'Фильмы',
        3 => 'Игры'
    ];


    public function index()
    {
        return view('news.index', ['categories'=>$this->categories]);
        /*foreach ($this->categories as $id =>$name) {
            $url = route('news::list', ['categoryId' => $id]);
            echo "<div><a href='{$url}'>{$name}</a></div>";
        }*/

    }

    public function list($categoryId)
    {
        $news = (new News())->getByCategoryId($categoryId);
        return view('news.list', ['news'=>$news]);
    }

            /*$news = (new News())->getByCategoryId($categoryId);
        return view(
            'news.list',
            [
                'news' => $news
            ]);*/


    public function newsCard($id)
    {
        $news = (new News())->getById($id);
        return view('news.card',['news' => $news]);
    }


}
