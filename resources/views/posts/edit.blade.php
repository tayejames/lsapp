@extends('layouts.app')

@section('content')
    <a href="{{ route('dashboard') }}" class="btn btn-secondary">Go Back</a>
    <h1>Edit Post</h1>
    {!! Form::open(['route' => ['posts.update', $post->id], 'method' => 'POST', 'files' => true]) !!}
        <div class="form-group py-2">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder'=> 'Title']) }}
        </div>
        <div class="form-group py-2">
            {{ Form::label('body', 'Body') }}
            {{ Form::textarea('body', $post->body, ['class' => 'ckeditor form-control', 'placeholder'=> 'Body Text']) }}
        </div>
        <div class="form-group py-2">
            {{ Form::file('cover_image') }}
        </div>
        <div class="form-group py-2">
            {{ Form::hidden('_method', 'PUT') }}
            {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
        </div>
    {!! Form::close() !!}
@endsection