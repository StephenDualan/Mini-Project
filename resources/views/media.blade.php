@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8 text-center">
    <h1 class="text-3xl font-bold text-blue-500">Media Gallery</h1>
    <p class="text-gray-600 mt-4">Browse our latest media content.</p>

    <div class="grid grid-cols-3 gap-4 mt-6">
        <img src="https://via.placeholder.com/150" alt="Sample Image" class="rounded shadow">
        <img src="https://via.placeholder.com/150" alt="Sample Image" class="rounded shadow">
        <img src="https://via.placeholder.com/150" alt="Sample Image" class="rounded shadow">
    </div>
</div>
@endsection
