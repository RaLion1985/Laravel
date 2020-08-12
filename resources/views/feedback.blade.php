@extends ('layouts.app')
@section ('content')
    <div class="col-md-4 offset-2">
        <H4>Страница обратной связи</H4>
        <form method="post" action="{{route('feedbackSave')}}">
            @csrf
            <p><input type="text" class="form-control" name="username" placeholder="Имя пользователя" value="{{old( 'username')}}"></p>
            @error('username') Заполните поле "Имя пользователя" @enderror</p>
            <p><input type="text" class="form-control" name="comment" placeholder="Комментарий" value="{{old( 'comment')}}"></p>
            <button type="submit" class="btn btn-success">Отправить комментарий</button>
        </form>
        <br>
        <br>
        <div class="blog-post">

            <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="<?=route('Welcome')?>">На начальную страницу</a>
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
            </nav>
        </div>
    </div>
@stop
