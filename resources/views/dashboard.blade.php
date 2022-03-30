@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    {{ __('You are logged in!') }}
                    <div class="py-2">
                        <a class="btn btn-primary" href="{{ route('posts.create') }}">Create Post</a>
                    </div>
                    @if (count($user->posts) > 0)
                        <h3>Your Blog Posts</h3>
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach ($user->posts as $post)
                                <tr>
                                    <th>{{ $post->title }}</th>
                                    <td><a href="{{ route('posts.edit', $post->id) }}" class="btn btn-success">Edit</a></td>
                                    <td>
                                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'POST']) !!}
                                            {{ Form::hidden('_method', 'DELETE') }}
                                            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                    <h3>You have no posts</h3>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
