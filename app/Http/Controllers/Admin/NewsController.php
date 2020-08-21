<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsCreateRequest;
use App\Models\News;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newList=News::paginate(5);
        return view ('admin.news.index',['newsList'=>$newList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param NewsCreateRequest $request
     * @return \Illuminate\Http\Response
     */
    //public function store(Request $request)
    public function store(NewsCreateRequest $request)
    {
        //dd($request->all());
       // try {
         /*   $request->validate(
                [
                    'img'   => 'required|url',
                    'title' => 'required|string|min:5|max:255',
                    'news'  => 'sometimes|string'
                ]


                );*/
            /*$this->validate($request, [
                'img' => 'required|url',
                'title' => 'required|string|min:5|max:255',
                'news' => 'sometimes|string'
            ]
            );*/

            //$data = $request->only(['img', 'title', 'news']);
            $data = $request->validated();
            $news = News::create($data);
            if ($news) {
                return redirect()->route('news.index')->with('success', trans('messages.admin.news.store.success'));
            }
            return back()->with('error', trans('messages.admin.news.store.error'));
            /*} catch (\Illuminate\Validation\ValidationException $e) {
            $all = $e->validator->getMessageBag()->all();
            dd($all);*/

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view ('admin.news.edit',['news'=>$news]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $news->img   = $request->input('img');
        $news->title = $request->input('title');
        $news->news = $request->input('news');
        if ($news->save()) {
            return redirect()->route('news.index')->with('success','Новость успешно обновлена');
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {

        return view ('admin.news.destroy',['news'=>$news]);
        /*$news=News::destroy();
        dd($news);
        return redirect()->route('news.index')->with('success','Новость успешно удалена');*/


    }
}
