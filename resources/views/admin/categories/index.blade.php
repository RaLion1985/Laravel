@extends('layouts.app')
@section('content')
    <div>
        <a href="{{ route('categories.create') }}">Добавить категорию</a>
        <br>
        <a href="{{ route('admin') }}">В админку</a>
    </div>
    <br>
    <h4>Привет, Админ</h4>
    @if(session()->has('success'))
        <strong>{{ session()->get('success') }}</strong>
    @endif
    <div class="col-md-4 offset-2">
        @forelse($categoryList as $category)
            <div>
                <p><a href=" {{ route('categories.edit', ['category' => $category]) }}">{{ $category->Category }} - редактировать</a></p>
                <p>{{$category->Category_description}}</p>
                <br>
            </div>
        @empty
            <h2>Категорий нет</h2>
        @endforelse

    </div>
    <nav class="blog-pagination">
        {{$categoryList->links()}}
        <a class="btn btn-outline-primary" href="<?=route('Welcome')?>">На начальную страницу</a>
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>
@stop
