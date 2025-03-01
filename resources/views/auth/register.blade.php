@extends('layouts.app')

@section('content')
<div class="container mx-auto max-w-md mt-8 p-6 bg-white shadow-lg rounded">
    <h1 class="text-3xl font-bold text-center text-blue-500">Register</h1>
    <p class="text-gray-600 text-center">Create an account below.</p>

    <form class="mt-6">
        <input type="text" placeholder="Name" class="w-full p-2 border rounded mb-3">
        <input type="email" placeholder="Email" class="w-full p-2 border rounded mb-3">
        <input type="password" placeholder="Password" class="w-full p-2 border rounded mb-3">
        <button class="w-full bg-green-500 text-white p-2 rounded hover:bg-green-700">
            Register
        </button>
    </form>
</div>
@endsection
