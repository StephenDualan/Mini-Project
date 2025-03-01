@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8 p-6 bg-white shadow-md rounded">
    <h1 class="text-3xl font-bold text-blue-500">Latest Blog Posts</h1>
    <div class="mt-4">
        <article class="border-b pb-4">
            <h2 class="text-2xl font-bold">Post Title 1</h2>
            <p class="text-gray-600">WE ARE FINE</p>
        </article>
        <article class="border-b pb-4 mt-4">
            <h2 class="text-2xl font-bold">Post Title 2</h2>
            <p class="text-gray-600">I LOVE IT</p>
        </article>
    </div>
</div>
@endsection
