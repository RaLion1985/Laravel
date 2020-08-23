@extends('layouts.app')
@section('content')
    <h1>Привет, {{$user->name}}</h1>
    @if(session()->has('success'))
        <strong>{{ session()->get('success') }}</strong>
    @endif

    <br>
    <a href="{{ route('news.index') }}">Список новостей</a><br>
    @if (session()->has('error'))
        <h1 style="color:red;"> {{ session()->get('error') }}</h1>
    @endif
    <hr>
    <h1>Данные пользователя</h1>
    <form method="post" action="{{route('user.update',['user'=>$user])}}">
        @csrf
        @method('PUT')
        <div class="form-group row">
            <div class="col-md-4">
                <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Имя') }}</label>
                <input type="text" class="form-control" name="name" placeholder="Имя" value="{{$user->name}}">
                @error('name') Заполните это поле @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-4">
                 <label for="phone" class="col-md-4 col-form-label text-md-left">{{ __('Телефон') }}</label>
                 <input type="number" class="form-control" name="phone" placeholder="Телефон" value="{{$user->phone}}">
                @error('phone') Заполните это поле @enderror
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-4">
                <label for="phone" class="col-md-4 col-form-label text-md-left">{{ __('E-mail адрес') }}</label>
                 <input type="email" class="form-control" name="email" placeholder="e-mail" value="{{$user->email}}">
                @error('email') Заполните это поле @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-1">
                <label for="is_Admin" class="col-md-1 col-form-label text-md-left">{{ __('Администратор?') }}</label>
                <input type="number" class="form-control" name="is_Admin" placeholder="Администратор?" value="{{$user->is_Admin}}">
                @error('is_Admin') Заполните это поле @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-success">Сохранить</button>



    </form>
@stop
