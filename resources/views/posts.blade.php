@extends('layouts.app')

@section('content')
<div class="bg-gray-900 text-white min-h-screen flex items-center justify-center">

    <div class="w-full max-w-xl">

        <h1 class="text-3xl font-bold mb-6 text-center text-blue-400">
            Notes Board
        </h1>

        <form method="POST" action="/posts" class="mb-6">
            @csrf

            <input type="text" name="title" placeholder="Note title..."
                class="w-full p-2 mb-2 rounded bg-gray-700 text-white">

            <textarea name="content" placeholder="Write your note..."
                class="w-full p-2 mb-2 rounded bg-gray-700 text-white"></textarea>

            <button class="bg-green-500 px-4 py-2 rounded hover:bg-green-600">
                Add Note
            </button>
        </form>

        @if($posts->isEmpty())
            <p>No notes yet. Add one above 👆</p>
        @endif

        @foreach($posts as $post)
            <div class="bg-gray-800 p-3 rounded mb-2">
                <h2 class="font-bold">{{ $post->title }}</h2>
                <p>{{ $post->content }}</p>

                <form method="POST" action="/posts/{{ $post->id }}">
                    @csrf
                    @method('DELETE')

                    <button class="bg-red-500 px-2 py-1 rounded mt-2">
                        Delete
                    </button>
                </form>
            </div>
        @endforeach

        <div class="text-center mt-6">
            <a href="/" class="bg-blue-500 px-4 py-2 rounded hover:bg-blue-600">
                Back to Home
            </a>
        </div>

    </div>

</div>
@endsection