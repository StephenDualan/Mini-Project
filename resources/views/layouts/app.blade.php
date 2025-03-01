<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Breeze</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-500 p-4 text-white">
        <div class="container mx-auto">
            <a href="/" class="text-lg font-bold">Home</a>
            <a href="/form" class="ml-4">Register</a>
            <a href="/list" class="ml-4">List</a>
            <a href="/users" class="ml-4">Users</a>
            <a href="/media" class="ml-4">Media</a>
            <a href="/blog" class="ml-4">Blog</a>
            <a href="/styling" class="ml-4">Styling</a>
        </div>
    </nav>

    <div class="container mx-auto mt-8">
        @yield('content')
    </div>
</body>
</html>
