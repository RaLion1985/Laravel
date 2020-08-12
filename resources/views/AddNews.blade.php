@extends ('layouts.app')
@section ('content')
    <div class="col-md-4 offset-2">
<H1>Страница добавления новостей</H1>
    <form method="post" action="{{route('admin.news.store')}}">
        @csrf
        <p><input type="number" class="form-control" name="id" placeholder="ID" value="{{old('id')}}"></p>

        <p><input type="text" class="form-control" name="title" placeholder="Заголовок" value="{{old( 'title')}}">
        @error('title') Заполните поле "Заголовок" @enderror</p>
        <p><textarea class="form-control" name="text" placeholder="Текст" value="{{old('text')}}"></textarea></p>
        <button type="submit" class="btn btn-success">Добавить</button>

    <!--
    <p>Введите название новости</p>
    <p><input maxlength="45" size="40" name="id" value="Новая новость"></p>
    <p><b>Введите полное описание новости:</b></p>
    <p><textarea cols="60" rows="15" name="comment"></textarea></p>
    <p><b>Введите краткое описание новости:</b></p>
    <p><textarea cols="60" rows="5" name="comment"></textarea></p>-->

</form>
<br>
<br>
        <div class="blog-post">

<nav class="blog-pagination">
    <a class="btn btn-outline-primary" href="<?=route('Welcome')?>">На начальную страницу</a>
    <a class="btn btn-outline-primary" href="#">Older</a>
    <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
</nav> </div>
    </div>
@stop
