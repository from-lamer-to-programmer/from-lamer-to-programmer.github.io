@extends('layouts.main')
@section('title', 'home')
@section('body')
    @foreach($posts as $post)
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card mb-4 mt-4">
                        <img src="{{url('images/animeprogrammergirl2.png')}}" class="card-img-top" alt="Post image" height="450">
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <p class="card-text">{{$post->content}}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    @endforeach
@endsection
