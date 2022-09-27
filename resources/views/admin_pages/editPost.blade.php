{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/blogs.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>

<body> --}}
    {{-- @dd($find_post) --}}
    @extends('layouts.blogs_view')
    @section('content')
    <div class="container mt-5">
        <form action="/postUpdate/{{$find_post->id}}" method="post">
            @csrf
            @method('put')
            <div class="form-group pb-5">
                <label for="titleid" class="form-label">title</label>
                <input type="text" id="titleid" class="form-control" name="title" value="{{ $find_post->title }}"
                    required>
            </div>
            <div class="form-group pb-5">
                <label for="contentid">content</label>
                <textarea class="form-control" id="contentid" rows="3" name="body" required>{{ $find_post->body }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary d-grid gap-2 col-6 mx-auto">Submit</button> 
        </form>
    </div>
    @endsection

    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script> --}}

</body>

</html>
