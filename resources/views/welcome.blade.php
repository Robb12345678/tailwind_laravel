@extends('layouts.app')

@section('content')

<div class="min-h-screen flex items-center justify-center">

    <div class="text-center">

        <h1 class="text-5xl md:text-6xl font-bold tracking-wider mb-10">
            NOTES BOARD
        </h1>

        <a href="/posts"
            class="inline-block bg-green-500 px-6 py-2 rounded-md text-white font-semibold hover:bg-green-600 transition">
            Go to Posts
        </a>

    </div>

</div>

@endsection