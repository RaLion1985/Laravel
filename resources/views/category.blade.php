@extends ('layouts.index')
@section ('content')
    <h2>{!! $category->Category !!} </h2>
    @forelse($category->news as $n)
        <div class="blog-post">

            <a href="{{route('OneNew',
            [
                'id_news'=>$n['id']
            ])
            }}"> <h2 class="blog-post-title">{!! $n['title'] !!}</h2></a>
            <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>
            <p>{!! $n['news'] !!}</p>
            <hr>

        </div>
    @empty
        <h2>Новостей нет</h2>
    @endforelse
    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="<?=route('Welcome')?>">На начальную страницу</a>
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>
@stop
