@extends('layouts.app')

@section('content')
<div class="row">

    <div class="col-md-6">
        <img class="w-100" src="/storage/cover_images/{{$post->cover_image}}">
    </div>
    <div class="col-md-6">
        <h1>{{$post->title}}</h1>

        <div>{!!$post->body!!}</div>
        <hr>
        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
        <hr>
        @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id)
                <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

                {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                {!!Form::close()!!}
            @endif
        @endif
    </div>

    <a class="mt-2" href="/posts"><i class="fas fa-arrow-left"></i> Go back</a>

</div>
@endsection
