@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if (count($posts) > 0)
    @foreach ($posts as $post)
        <div class="row bg-light py-4 my-4">
            <div class="col-md-4 col-sm-4">
                {{-- <img style="width: 100%;" src="{{ asset('storage.images') }}/{{ $post->cover_image  }}" alt="Cover Image"> --}}
                <img style="width: 100%; height:200px;" src="/storage/images/{{ $post->cover_image }}" alt="Cover Image">
            </div>
            <div class="col-md-8 col-sm-8">
                <h3><a href="{{ route('posts.index') }}/{{ $post->id  }}">{{ $post->title }}</a></h3>
                <small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
            </div>
        </div>
    @endforeach
    {{ $posts->links() }}
    @else
        <p>No post found</p>
    @endif
@endsection