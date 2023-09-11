@extends('layouts.main')
@section('title', 'posts')
@section('body')

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card mb-4 mt-4">
                        <img src="{{url('images/animeprogrammergirl.png')}}" class="card-img-top" alt="Post image" height="450">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->id}}</h5>
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p class="card-text">{{$post->content}}</p>
                            <a href="{{route('post.edit', $post->id)}}">Изменить</a>
                            <form action="{{route('post.delete', $post->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Удалить" class="btn btn-danger">
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
