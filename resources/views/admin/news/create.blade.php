@extends ('layouts.index')
@section ('content')

    <div class='col-md-8'>
        <h1>Добавить новость</h1>
        <form method="post" action="{{route('news.store')}}">
            @csrf
            <p><input type="text" class="form-control" name="img" placeholder="Изображение" value="{{old('img')}}"></p>
            <p><input type="text" class="form-control" name="title" placeholder="Заголовок" value="{{old('title')}}">
            @error('title') Заполните это поле @enderror </p>
            <p><textarea class="form-control" name="news" placeholder="Текст">{{old('news')}}</textarea></p>
            <button type="submit" class="btn btn-success">Добавить</button>
        </form>
    </div>
    <br>
    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="<?=route('Welcome')?>">На начальную страницу</a>
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>
@stop
