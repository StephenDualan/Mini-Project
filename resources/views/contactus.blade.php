@extends('layouts.app')

@section('content')
    <h1>Contact Us</h1>
    <nav>
        <a href="{{ route('dashboard') }}">Dashboard</a> |
        <a href="{{ route('services') }}">Services</a> |
        <a href="{{ route('contactus') }}">Contact Us</a>
    </nav>
    <form>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea><br><br>

        <button type="submit">Send</button>
    </form>
@endsection
