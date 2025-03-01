@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-8 p-6 bg-white shadow-md rounded">
    <h1 class="text-3xl font-bold text-blue-500">Users List</h1>
    <table class="w-full mt-4 border-collapse">
        <thead>
            <tr class="bg-gray-200">
                <th class="border p-2">ID</th>
                <th class="border p-2">Name</th>
                <th class="border p-2">Email</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="border p-2">1</td>
                <td class="border p-2">John Doe</td>
                <td class="border p-2">john@example.com</td>
            </tr>
            <tr>
                <td class="border p-2">2</td>
                <td class="border p-2">Jane Smith</td>
                <td class="border p-2">jane@example.com</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
