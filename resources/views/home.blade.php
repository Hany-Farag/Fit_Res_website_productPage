@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">welcome Mr. {{auth::user()->name}}</h1>
    <br><br>
    <div class="row">
        <a class="btn btn-primary" href="/all articles"> control your articles</a>
    </div>
</div>
@endsection
