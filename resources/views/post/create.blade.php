@extends('layouts.main')
@section('title', 'create post')
@section('body')

    <div class="container mt-5">
        <form action="{{ route('post.store') }}" method="post">
            @csrf
            <div class="form-group mb-3">
                <label for="name" class="form-label">Название поста:</label>
                <input type="text" class="form-control" id="name" name="title" placeholder="Название" required>
            </div>
            <div class="form-group mb-3">
                <label for="content" class="form-label">Контент:</label>
                <textarea class="form-control" id="content" name="content" placeholder="Контент" required></textarea>
            </div>
            <div class="form-group mb-3">
                <label for="Image" class="form-label">Изображение (путь):</label>
                <input type="text" class="form-control" id="Image" name="image" placeholder="Путь к изображению" required>
            </div>
            <button type="submit" class="btn btn-primary">Создать</button>
        </form>
        <div class="mt-3">
            <button class="btn btn-secondary">Отмена</button>
        </div>
    </div>
@endsection
