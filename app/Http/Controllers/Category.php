<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use Illuminate\Http\Request;

class Category extends Controller
{
    // Вывод всех категорий
    public function indexCategory()
    {
        //var_dump(Controller::ReturnCategory());
        return view('Categories',['name' => Controller::ReturnCategory()]);

    }
    public function show(Categories $category) {
       // dd($category->news);

        //dd($category);
        return view('category',['category'=>$category]);
    }
}
