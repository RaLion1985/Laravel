<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsCreateRequest;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function store(NewsCreateRequest $request)
    {
        //dd($request->only('title','id'));
        //dd($request->except('_token','id'));
        //$title=$request->input('title');
        //$title=$request->has('titles');
        //$title=$request->method();
        //$title=$request->url();

        $data= $request->only('id','title','text');
        $saveFile=function (array $data)
        {
            $responseData=[];
            $fileNews=storage_path('app/news.txt');
            if(file_exists($fileNews))
            {
                $file=file_get_contents($fileNews);
                $response=json_decode($file,true);
            }
            //$responseData=array_merge($responseData,$data);
            $responseData[]=$data;
            if(isset($response) && !empty($response))
            {
                $r=array_merge($response,$responseData);
            } else {
                $r=$responseData;
            }
            file_put_contents($fileNews,json_encode($r));
        };
        $saveFile($data);
        return redirect()->route('Welcome')->with('success','Новость успешно добавлена');
    }
}
