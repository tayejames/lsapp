@extends('layouts.app')

@section('content')
    <div class="bg-light py-5 text-center">
        <h1>{{ $title }}</h1>
        <p>This is a welcome page</p>
        @if (Auth::guest())
            <p>
                <a href="{{ route('login') }}" role="button" class="btn btn-primary btn-lg">Login</a>
                <a href="{{ route('register') }}" role="button" class="btn btn-success btn-lg">Register</a>
            </p>
        @else
            <p>
                <a href="{{ route('dashboard') }}" role="button" class="btn btn-secondary btn-lg">Dashboard</a>
            </p>
        @endif
    </div>
@endsection