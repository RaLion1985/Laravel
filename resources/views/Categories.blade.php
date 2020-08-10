@extends ('layouts.index')
@section ('content')
    @foreach ($name as $n)
    <div class="blog-post">
        <h4><a href="<?=route('News',['id'=> $n['id']])?>"><?=$n['Category'] ?></a></h4>
    </div>
    @endforeach

    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="<?=route('Welcome')?>">На начальную страницу</a>
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>
@stop
