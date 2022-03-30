@extends('layouts.app')

@section('content')
    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Go Back</a>
    <h1>{{ $post->title }}</h1>
    <img style="width: 100%; height:50%;" src="/storage/images/{{ $post->cover_image }}" alt="Cover Image">
     
    <div>
        <p>{!! $post->body !!}</p>
    </div>
    <hr>
    <small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)
            <hr>
            <div class="d-flex justify-content-between">
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                {!! Form::close() !!}
            </div>    
        @endif
    @endif
@endsection