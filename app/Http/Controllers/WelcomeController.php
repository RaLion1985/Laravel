<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index()
    {
        $news =$this->news;
        $filename=storage_path('app/news.txt');
        if(file_exists($filename)) {
            $file=file_get_contents($filename);
            $newsFile = json_decode($file,true);
            if (isset($newsFile) && !empty($newsFile)) {
                $news=$newsFile;
            }
        }
        //dd($news);
        $route1=route('Category');
        $text1= "<a href='" . $route1."'>Посмотреть все категории новостей 2</a>";
        $text2 = route('AddNews');
        return view('NewsWelcome',
            [
                'news'=>$news,
                'categories'=>$this->category,
            ]);
    }


}
