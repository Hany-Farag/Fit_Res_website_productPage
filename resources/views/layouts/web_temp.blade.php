<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FiT-Res</title>
    <link rel="icon" href="{{asset('img/Fit-Res (1).png')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row pt-4">
            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                <a href="/"><img src="{{ asset('img/Fit-Res (1).png') }}" alt="logo" class="img-fluid img-logo"></a>
            </div>
            <div class="col-lg-9 col-md-6 col-sm-6 col-6">
                <nav class="navbar navbar-expand-xl navbar-light">
                    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav ms-auto pe-5">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#articles">Our Articels</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">GitHub</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="#aboutus">about us</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        @yield('header')
    </div>


    <div class="container-fluid">
        @yield('content')
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="{{ asset('js/home.js') }}"></script>
</body>

</html>
