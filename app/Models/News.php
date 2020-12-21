<?php


namespace App\Models;


class News
{
    private $news = [
        1 => [
            'id' => 1,
            'title' => 'Первая новость',
            'content' => 'Описание первой новости',
            'category_id' => 1
        ],
        2 => [
            'id' => 2,
            'title' => 'Вторая новость',
            'content' => 'Описание второй новости',
            'category_id' => 2
        ],
        3 => [
            'id' => 3,
            'title' => 'Третья новость',
            'content' => 'Описание третьей новости',
            'category_id' => 1
        ],
        4 => [
            'id' => 4,
            'title' => 'Четвертая новость',
            'content' => 'Описание четвертой новости',
            'category_id' => 3
        ],
        5 => [
            'id' => 5,
            'title' => 'Пятая новость',
            'content' => 'Описание пятой новости',
            'category_id' => 2
        ]
    ];

    public function getById(int $id)
    {
        return $this->news[$id];
    }

    public function getByCategoryId(int $categoryId)
    {
        $news = [];
        foreach ($this->news as $id => $item) {
            if($item['category_id'] == $categoryId) {
                $news[$id] = $item;
            }
        }
        return $news;
    }
}
