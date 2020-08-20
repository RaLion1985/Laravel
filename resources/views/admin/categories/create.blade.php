@extends ('layouts.index')
@section ('content')

    <div class='col-md-8'>
        <h1>Редактировать категорию</h1>

        <form method="post" action="{{route('categories.store')}}">
            @csrf
            <p><input type="text" class="form-control" name="Category" placeholder="Заголовок" value="{{old('Category')}}">
                @error('Category') Заполните это поле @enderror </p>
            <p><textarea class="form-control" name="Category_description" placeholder="Текст">{{old('Category_description')}}</textarea></p>
            <button type="submit" class="btn btn-success">Добавить категорию</button>

    </div>
    <br>
    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="<?=route('Welcome')?>">На начальную страницу</a>
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>
@stop
