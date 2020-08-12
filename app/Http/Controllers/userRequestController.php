<?php

namespace App\Http\Controllers;

use App\Http\Requests\userRequestRequest;
use Illuminate\Http\Request;

class userRequestController extends Controller
{
    public function index()
    {
        return view('userRequest');
    }
    public function save(userRequestRequest $request)
    {
        //dd($request);
        $data= $request->only('userCustomer','phone','email','customerRequest');
        $saveFile=function (array $data)
        {
            $responseData=[];
            $fileUserRequest=storage_path('app/userRequest.txt');
            if(file_exists($fileUserRequest))
            {
                $file=file_get_contents($fileUserRequest);
                $response=json_decode($file,true);
            }
            $responseData[]=$data;
            if(isset($response) && !empty($response))
            {
                $r=array_merge($response,$responseData);
            } else {
                $r=$responseData;
            }
            file_put_contents($fileUserRequest,json_encode($r));
        };
        $saveFile($data);
        return redirect()->route('Welcome')->with('success','Запрос на получение данных отправлен');

    }
}
