<?php

namespace App\Http\Controllers;
use App\Models\Categories;
use Illuminate\Http\Request;

class NewsOfCategory extends Controller
{
    //
    public function indexNews(int $id_category)
    {
        //var_dump(Controller::ReturnNews($id_category));
        return view('IndexNews',
            [
                'IndexNews' => Controller::ReturnNews($id_category),
                'Category' => Categories::find($id_category),
                'categories' => Categories::all()
            ]);
    }
}
