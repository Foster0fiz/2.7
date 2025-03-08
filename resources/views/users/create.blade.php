@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Регистрация пользователя</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Имя:</label>
            <input type="text" name="name" id="name" class="form-control" required value="{{ old('name') }}">
        </div>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" class="form-control" required value="{{ old('email') }}">
        </div>

        <div class="form-group">
            <label for="age">Возраст:</label>
            <input type="number" name="age" id="age" class="form-control" required min="18" value="{{ old('age') }}">
        </div>

        <div class="form-group">
            <label for="password">Пароль:</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password_confirmation">Повторите пароль:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="image">Фото профиля (jpeg, png, jpg, макс. 2MB):</label>
            <input type="file" name="image" id="image" class="form-control-file">
        </div>

        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
    </form>
</div>
@endsection
