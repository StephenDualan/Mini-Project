@extends('layouts.app')

@section('content')
    <h1>Our Services</h1>
    <nav>
        <a href="{{ route('dashboard') }}">Dashboard</a> |
        <a href="{{ route('services') }}">Services</a> |
        <a href="{{ route('contactus') }}">Contact Us</a>
    </nav>
    <ul>
        <li>Web Development</li>
        <li>App Development</li>
        <li>SEO Optimization</li>
    </ul>
@endsection
