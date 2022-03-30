@extends('layouts.app')

@section('content')
    <a href="{{ route('dashboard') }}" class="btn btn-secondary">Go Back</a>
    <h1>Create Post</h1>
    {!! Form::open(['route' => 'posts.store', 'method' => 'POST', 'files' => true]) !!}
        <div class="form-group py-2">
            {{ Form::label('title', 'Title') }}
            {{ Form::text('title', '', ['class' => 'form-control', 'placeholder'=> 'Title']) }}
        </div>
        <div class="form-group py-2">
            {{ Form::label('body', 'Body') }}
            {{ Form::textarea('body', '', ['class' => 'ckeditor form-control', 'placeholder'=> 'Body Text']) }}
        </div>
        <div class="form-group py-2">
            {{ Form::file('cover_image') }}
        </div>
        <div class="form-group py-2">
            {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
        </div>
    {!! Form::close() !!}
@endsection