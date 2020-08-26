<?php

namespace App\Http\Controllers;
use App\Models\Armyrss;
use App\Models\News;
use App\Services\ParserService;
use Illuminate\Http\Request;

class ParserController extends Controller
{
    public function index()
    {
        $objParser = new ParserService('https://news.yandex.ru/music.rss');
        dd($objParser->getData());
    }
    public function army(Armyrss $armyrss)
    {
        $objParser = new ParserService('https://news.yandex.ru/army.rss');
        $object=$objParser->getData();
        $armyrss = New Armyrss();

        foreach ($object['news'] as $item)
        {
            //dd ($item['title']);
            /*$armyrss->title= $item['title'];
            $armyrss->link= $item['link'];
            $armyrss->description= $item['description'];*/
            //dd($armyrss);
           $armyrss=Armyrss::create(
               [
                   'title' => $item['title'],
                   'link' => $item['link'],
                   'description' => $item['description'],
               ]);

        }
        echo ('Данные по армейским новостям добавлены в базу');
    }
}
