@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        <p>This is the laravel application from the "Laravel From Scratch" YouTube series</p>
        <p>
            <a class="btn btn-primary bnt-lg" href="/login" role="button">Login</a>
            <a class="btn btn-success bnt-lg" href="/register" role="button">Register</a>
        </p>
    </div>
@endsection

