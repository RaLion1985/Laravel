@extends ('layouts.index')
@section ('content')


<div class="blog-post">

    <h2 class="blog-post-title">{!! $new['title'] !!}</h2>
    <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>
    <p>{!! $new['news'] !!}</p>
    <hr>

</div>

<nav class="blog-pagination">
    <a class="btn btn-outline-primary" href="<?=route('Welcome')?>">На начальную страницу</a>
    <a class="btn btn-outline-primary" href="#">Older</a>
    <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
</nav>
@stop
