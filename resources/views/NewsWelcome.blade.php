@extends ('layouts.index')
@section ('content')


    <div class="blog-post">
        <h4 class="blog-post-title"><a href="{{route('AddNews')}}">Добавить новость</a></h4>
    </div>

    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="<?=route('Welcome')?>">На начальную страницу</a>
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>
@stop



