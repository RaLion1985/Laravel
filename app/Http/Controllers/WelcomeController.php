<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function index()
    {
        $route1=route('Category');
        $text1= "<a href='" . $route1."'>Посмотреть все категории новостей 2</a>";
        $text2 = route('AddNews');
        return view('NewsWelcome',
            [
                'news'=>$this->news,
                'categories'=>$this->category,
            ]);
    }


}
