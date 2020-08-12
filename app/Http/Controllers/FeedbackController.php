<?php

namespace App\Http\Controllers;
use App\Http\Requests\feedbackCreateRequest;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    //
    public function index()
    {
        return view('feedback');
    }
    public function save(feedbackCreateRequest $request)
    {
        //dd($request);
        $data= $request->only('username','comment');
        $saveFile=function (array $data)
        {
            $responseData=[];
            $fileFeedback=storage_path('app/feedbacks.txt');
            if(file_exists($fileFeedback))
            {
                $file=file_get_contents($fileFeedback);
                $response=json_decode($file,true);
            }$responseData[]=$data;
            if(isset($response) && !empty($response))
            {
                $r=array_merge($response,$responseData);
            } else {
                $r=$responseData;
            }
            file_put_contents($fileFeedback,json_encode($r));
        };
        $saveFile($data);
        return redirect()->route('Welcome')->with('success','Отзыв успешно добавлен');

    }
}
