@extends('layouts.app')

@section('content')
    <h1>Dashboard</h1>
    <nav>
        <a href="{{ route('dashboard') }}">Dashboard</a> |
        <a href="{{ route('services') }}">Services</a> |
        <a href="{{ route('contactus') }}">Contact Us</a>
    </nav>
    <p>Welcome to the Dashboard.</p>
@endsection
