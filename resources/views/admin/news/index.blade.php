@extends('layouts.app')
@section('content')
    <div>
        <a href="{{ route('news.create') }}">Добавить новость</a>
        <br>
        <a href="{{ route('admin') }}">В админку</a>
    </div>
    <br>
    <h4>Привет, Админ</h4>
    @if(session()->has('success'))
        <strong>{{ session()->get('success') }}</strong>
    @endif
    <div class="col-md-4 offset-2">
        @forelse($newsList as $news)
            <div>
                <p><a href=" {{ route('news.edit', ['news' => $news]) }}">{{ $news->title }} - редактировать</a></p>
                <p><a href=" {{ route('news.destroy', ['news' => $news]) }}">{{ $news->title }} - удалить новость</a></p>
                <p>{{$news->news}}</p>
                <br>
            </div>
        @empty
            <h2>Новостей нет</h2>
        @endforelse

    </div>
    <nav class="blog-pagination">
        {{$newsList->links()}}
        <a class="btn btn-outline-primary" href="<?=route('Welcome')?>">На начальную страницу</a>
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>
@stop
