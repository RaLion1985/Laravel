@extends ('layouts.index')
@section ('content')

    <div class='col-md-8'>
        <h1>Редактировать категорию</h1>

        <form method="post" action="{{route('categories.update',['category'=>$category])}}">

            @csrf
            @method('PUT')
            <div>
                <input type="text" class="form-control" name="Category" placeholder="Заголовок" value="{{$category->Category}}">
                @error('Category')
                    <div class="aleret alert-danger">
                     @foreach($errors->get('Category') as $Error)
                        <p>{{$Error}}</p>
                     @endforeach
                    </div>
                @enderror
            </div>

            <div><textarea class="form-control" name="Category_description" placeholder="Текст">{{$category->Category_description}}</textarea>
                @error('Category_description')
                    <div class="aleret alert-danger">
                     @foreach($errors->get('Category_description') as $Error)
                        <p>{{$Error}}</p>
                    @endforeach
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Сохранить</button>

    </div>
    <br>
    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="<?=route('Welcome')?>">На начальную страницу</a>
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>
@stop
