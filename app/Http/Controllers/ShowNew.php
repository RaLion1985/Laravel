<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowNew extends Controller
{
    //
    public function ShowOneNew( $id_new)
    {
        $id_category=Controller::ReturnOneNew($id_new)['id_category'];
        //var_dump(Controller::ReturnNews($id_category));
        return view('ShowNew',
            [
                'new' => Controller::ReturnOneNew($id_new),
                'Category' => Controller::ReturnOneCategory($id_category),
                'categories' => $this->category
            ]);
    }
}
