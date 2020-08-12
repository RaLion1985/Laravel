@extends ('layouts.app')
@section ('content')
    <div class="col-md-4 offset-2">
        <H4>Страница обратной связи</H4>
        <form method="post" action="{{route('userRequest.save')}}">
            @csrf
            <p><input type="text" class="form-control" name="nameCustomer" placeholder="Имя заказчика" value="{{old( 'nameCustomer')}}"></p>
            @error('nameCustomer') Заполните поле "Имя заказчика" @enderror</p>
            <p><input type="number" class="form-control" name="phone" placeholder="Номер телефона" value="{{old( 'number')}}"></p>
            <p><input type="email" class="form-control" name="email" placeholder="E-mail" value="{{old( 'email')}}"></p>
            <p><input type="text" class="form-control" name="customerRequest" placeholder="Запрашиваемые данные" value="{{old( 'customerRequest')}}"></p>
            <button type="submit" class="btn btn-success">Получить данные</button>
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
