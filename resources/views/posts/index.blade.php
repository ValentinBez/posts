@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h1>Posts</h1>
            @if(count($posts) > 0)
                @foreach($posts as $post)
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="/storage/cover_images/{{$post->cover_image}}">
                        <div class="card-body">
                            <h3 class="card-title"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                            <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                        </div>
                    </div>
                @endforeach
                {{$posts->links()}}
            @else
                <p>No posts found</p>
            @endif
        </div>
    </div>
@endsection