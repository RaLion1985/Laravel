<?php

namespace App\Http\Controllers;

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
                'Category' => Controller::ReturnOneCategory($id_category),
                'categories' => $this->category
            ]);
    }
}
