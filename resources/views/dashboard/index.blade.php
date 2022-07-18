@extends('layouts.admin')
@section('content')
@section('title', 'Home page')

<h1>Hi {{auth() -> user() -> name}}</h1>

@endsection