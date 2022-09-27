<!DOCTYPE html>
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

<body>
    {{-- @dd(Auth::user()) --}}
    <div class="container mt-5">
        <form action="/post/add" method="POST">
            @csrf
            <div class="form-group">
                <label for="titleid" class="form-label">title</label>
                <input type="text" id="titleid" class="form-control" name="title" required>
            </div>
            <div class="form-group">
                <label for="contentid">content</label>
                <textarea class="form-control" id="contentid" rows="3" name="body" required></textarea>
            </div>
            {{-- <div class="form-group">
                <label for="userName" class="form-label">title</label>
                <input type="text" id="userName" class="form-control" name="slug" value={{Auth::user()->name}}>
            </div> --}}
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

</body>

</html>
