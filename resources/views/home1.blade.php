@extends('layout')

@section('content')
    <h1>My Home</h1>
    <h1>{{ $key1 }}</h1>

    <ul>
    @foreach ($tasks as $task)
        <li>{{ $task }}</li>
    @endforeach
    </ul>
@endsection