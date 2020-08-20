<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use function GuzzleHttp\Psr7\str;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /*protected $category =
    [
        [
          'id' => 1,
          'Categories' => 'Главные события'
        ],
        [
          'id' => 2,
          'Categories' => 'События планетарного масштаба'
        ],
        [
          'id' => 3,
          'Categories' => 'Региональные события'
        ],
        [
          'id' => 4,
          'Categories' => 'Научные достижения'
        ],
        [
            'id' => 5,
            'Categories' => 'Криминальная сводка'
        ],
    ];*/
    protected $news =
        [
            // 1 категория Главные события
            [
                'id' => 1,
                'id_category' => 1,
                'title' => 'Заголовок Главное событие',
                'news' => 'Главное событие №1'
            ],
            [
                'id' => 2,
                'id_category' => 1,
                'title' => 'Заголовок',
                'news' => 'Главное событие №2'
            ],
            [
                'id' => 3,
                'id_category' => 1,
                'title' => 'Заголовок',
                'news' => 'Главное событие №3'
            ],
            [
                'id' => 4,
                'id_category' => 1,
                'title' => 'Заголовок',
                'news' => 'Главное событие №4'
            ],
            // 2 категория События планетарного масштаба'
            [
                'id' => 5,
                'id_category' => 2,
                'title' => 'Заголовок',
                'news' => 'Событие планетарного масштаба №1'
            ],
            [
                'id' => 6,
                'id_category' => 2,
                'title' => 'Заголовок',
                'news' => 'Событие планетарного масштаба №2'
            ],
            [
                'id' => 7,
                'id_category' => 2,
                'title' => 'Заголовок',
                'news' => 'Событие планетарного масштаба №3'
            ],
            [
                'id' => 8,
                'id_category' => 2,
                'title' => 'Заголовок',
                'news' => 'Событие планетарного масштаба №4'
            ],
            // 3 категория Региональные события
            [
                'id' => 9,
                'id_category' => 3,
                'title' => 'Заголовок',
                'news' => 'Региональное событие №1'
            ],
            [
                'id' => 10,
                'id_category' => 3,
                'title' => 'Заголовок',
                'news' => 'Региональное событие №2'
            ],
            [
                'id' => 11,
                'id_category' => 3,
                'title' => 'Заголовок',
                'news' => 'Региональное событие №3'
            ],
            [
                'id' => 12,
                'id_category' => 3,
                'title' => 'Заголовок',
                'news' => 'Региональное событие №4'
            ],
            // 4 категория Научные достижения
            [
                'id' => 13,
                'id_category' => 4,
                'title' => 'Заголовок',
                'news' => 'Научное достижение №1'
            ],
            [
                'id' => 14,
                'id_category' => 4,
                'title' => 'Заголовок',
                'news' => 'Научное достижение №2'
            ],
            [
                'id' => 15,
                'id_category' => 4,
                'title' => 'Заголовок',
                'news' => 'Научное достижение №3'
            ],
            [
                'id' => 16,
                'id_category' => 4,
                'title' => 'Заголовок',
                'news' => 'Научное достижение №4'
            ],
            // 5 категория Криминальная сводка
            [
                'id' => 17,
                'id_category' => 5,
                'title' => 'Заголовок',
                'news' => 'Криминальная сводка №1'
            ],
            [
                'id' => 18,
                'id_category' => 5,
                'title' => 'Заголовок',
                'news' => 'Криминальная сводка №2'
            ],
            [
                'id' => 19,
                'id_category' => 5,
                'title' => 'Заголовок',
                'news' => 'Криминальная сводка №3'
            ],
            [
                'id' => 20,
                'id_category' => 5,
                'title' => 'Заголовок',
                'news' => 'Криминальная сводка №4'
            ],
        ];
    public function ReturnCategory ()
    {
        /*$arr=[];
        foreach ($this->category as $item) {
            array_push($arr,$item['Categories']);
        }
        return $arr;*/
        return $this->category;
    }
    public function ReturnOneCategory(int $id){
        $strCategory = "";
        foreach ($this->category as $item)
        {
            if ($item['id'] == $id) {$strCategory=$item['Categories'];}
        }
        return $strCategory;
    }
    public function ReturnNews (int $id_category)
    {
        $arr=[];
        foreach ($this->news as &$item) {
            if ($item['id_category'] == $id_category) {array_push($arr,
                [
                'id' => $item['id'],
                'id_category' => $item['id_category'],
                'title' => $item['title'],
                'news' => $item['news']
                ]);}
        }
        return $arr;

    }
    public function ReturnOneNew (int $id)
    {
        $arr = [];
        foreach ($this->news as $new)
        {
            if ($new['id'] == $id) {$arr=$new;}
        }
        return $arr;
    }
}
