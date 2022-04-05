@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Ce au vizitat prietenii tai</h1>
    </div>
</div>
<div class="row">
    @if(count($posts)>0)
        @foreach($posts as $post)
        <div class="col-md-3">
            <div class="card w-100" style="width: 18rem;">
                <a href="/posts/{{$post->id}}">
                    <img class="card-img-top" src="/storage/cover_images/{{$post->cover_image}}">
                </a>
                <div class="card-body">
                    <h2 class="card-title">{{$post->title}}</h2>
                    <p class="card-text"><small><b>Posted on:</b> {{$post->created_at}} <b>by</b> {{$post->user->name}}</small></p>
                </div>
            </div>
        </div>
        @endforeach

        {{$posts->links()}}
    @else
        <p>No post found</p>
    @endif
</div>

@endsection
