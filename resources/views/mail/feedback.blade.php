<!-- resources/views/mail/feedback.blade.php -->
@extends('layouts.email')

@section('content')
    <h1>Feedback from {{ $name }}</h1>
    <p>{{ $name }} has sent feedback about your website. Below are the comments left by the user:</p>
    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Comment:</strong> {{ $comment }}</p>
@endsection
