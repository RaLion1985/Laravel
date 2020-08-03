<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Category extends Controller
{
    // Вывод всех категорий
    public function indexCategory()
    {
        //var_dump(Controller::ReturnCategory());
        return view('Categories',['name' => Controller::ReturnCategory()]);

    }
}
