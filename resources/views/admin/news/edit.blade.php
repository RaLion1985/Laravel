@extends ('layouts.index')
@section ('content')

    <div class='col-md-8'>
        <h1>Редактировать новость</h1>
        <form method="post" action="{{route('news.update',['news'=>$news])}}">
            @csrf
            @method('PUT')
            <p><input type="text" class="form-control" name="img" placeholder="Ссылка на изображение" value="{{$news->img}}"></p>
            <p><input type="text" class="form-control" name="title" placeholder="Заголовок" value="{{$news->title}}">
                @error('title') Заполните это поле @enderror </p>
            <p><textarea class="form-control" name="news" placeholder="Текст">{{$news->news}}</textarea></p>
            <button type="submit" class="btn btn-success">Сохранить</button>
        </form>
    </div>
    <br>
    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="<?=route('Welcome')?>">На начальную страницу</a>
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>
@stop
