{{-- @dd($posts) --}}
@extends('layouts.web_temp')
@section('header')
    <div class="row">
        <div class="col-lg-5 col-md-5 my-auto">
            <h1 class="text-center">
                Train,Eat,be fit with
            </h1>
            <h1 class="text-center" style="color: red;font-weight: bold;">Fit-Res App</h1>
            <h4 class="text-center">
                <span> Lose </span> weight, learn a skill, <span> train </span>for a sport,<span> build </span>
                muscles.
            </h4>
            <h1 class="text-center pt-5 pb-3">#Rescue_Your_Fitness <h1>
                    <div class="text-center pt-2 pb-3">
                        <a class="btn btn-primary btn-lg" style="margin:10px"
                            href="https://download1481.mediafire.com/kgal3t9svmcg/ks0fzprse4mgde4/FitRes.apk">DownLoad
                            Now</a>
                        <a class="btn btn-primary btn-lg"
                            href="https://download1515.mediafire.com/cybief1exl0g/d3p2d6k82hcf2aa/FitRes_HIIT.apk">DownLoad
                            HIIT training tool Now</a>
                    </div>
        </div>
        <div class="col-lg-7 col-md-7 my-auto">
            <div class="text-center ">
                <img src="{{ asset('img/12.png') }}" alt="photo" class="img-fluid hed-img ">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col pb-5">
            <a href="#features">
                <svg class="arrows">
                    <path class="a1" d="M0 20 L30 52 L60 20"></path>
                    <path class="a2" d="M0 40 L30 72 L60 40"></path>
                </svg>
            </a>
        </div>
    </div>
@endsection
@section('content')
    {{-- section 2  -------------------------------------------------------- --}}
    <div class="row pt-3" id="features">
        <div class="col">
            <h2 class="text-center">Discover Our Features</h2>
        </div>
    </div>
    <div class="container">
        <div class="row pt-3 pb-3">
            <div class="col-lg-4 col-md-4 col-sm-4 pt-3 text-center pb-3">
                <div>
                    <img src="{{ asset('./img/online-fitness-workout-.png') }}" class="img-fluid ft-img" alt=""
                        style="border-radius:50%;background-color:#b1d4e0;width:200px;height:200px">
                    <h5 class="text-center pt-2">Many Exercises Tutorials</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 pt-3 text-center pb-3">
                <div>
                    <img src="{{ asset('img/istockphoto-1216634872-612x612-removebg-preview.png') }}"
                        class="img-fluid ft-img" alt=""
                        style="border-radius: 50%;background-color:#b1d4e0;width:200px;height:200px">
                    <h5 class="text-center pt-2">Steps Trackers</h5>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 pt-3  text-center pb-3">
                <div>
                    <img src="{{ asset('img/weight-management-hub-removebg-preview.png') }}" class="img-fluid ft-img"
                        alt="" style="border-radius:50%;background-color:#b1d4e0;width:200px;height:200px">
                    <h5 class="text-center pt-2">Nutrition</h5>
                </div>
            </div>
        </div>
    </div>
    {{-- section 3 -------------------------------------------------------- --}}

    <div class="row pt-3">
        <div class="col">
            <h2 class="text-center">Workout plans</h2>
        </div>
    </div>
    <div class="container" style="">
        <div class="row">
            <div class="col-xl-6 col-lg-7 col-md-7 text-center my-auto">
                <h1 style="color:rgb(202, 31, 31);font-weight:bold" class="pt-1">
                    Fit-Res focuses on Training
                </h1>
                <h4>
                    Our fitness programs were built to be convenient
                    and seamlessly integrate into your life.
                </h4>
                <button type="button" id="img-trn0" class="btn btn-sm m-1 btn-ft1_before mb-2">Get
                    fit</button>
                <button type="button" id="img-trn1" class="btn btn-sm m-1 btn-ft1_before  mb-2">lose
                    weight</button>
                <button type="button" id="img-trn2" class="btn btn-sm m-1 btn-ft1_before  mb-2">build
                    muscle</button>
            </div>
            <div class="col-xl-6 col-lg-5 col-md-5 text-center">
                <img src="{{ asset('img/character_jogger_1.gif') }}" alt="photo" id="trn-sec-img" class="img-fluid">
            </div>
        </div>
    </div>
    {{-- section4  -------------------------------------------------------- --}}

    <div class="row pt-3">
        <div class="col">
            <h2 class="text-center">steps tracker</h2>
        </div>
    </div>
    <div class="container ">
        <div class="row">
            <div class="col-lg-7 my-auto">
                {{-- <h1 style="font-weight:bold" class="pt-5 text-center">
                   Track your Progress 
                </h1> --}}
                <h4 class="pt-2 text-center" style="font-weight: bold">
                    track you progress,record it,and finally celebrate
                </h4>
                <h6 class="text-center pt-2">
                    application count your walking steps and estimate the number of calories burned.
                </h6>
                <p class="note text-center"><span class="rounded border">note: this feature available to devices supported
                        by motion sensors</span>
                </p>
                <h6 class="text-center">
                    you can track and record your weight,your workout tutorials, and even more your meals
                </h6>
            </div>
            <div class="col-lg-5 text-center">
                <img src="{{ asset('./img/jog_ui.gif') }}" alt="" style="border-radius:20px;padding:10px;"
                    class="img-fluid">
            </div>
        </div>
    </div>
    {{-- section 5  -------------------------------------------------------- --}}
    <div class="row pt-3">
        <div class="col">
            <h2 class="text-center">Nutrition</h2>
        </div>
    </div>
    <div class="container ">
        <div class="row">
            <div class="col-lg-7 my-auto">
                <h4 class="pt-2 text-center" style="font-weight: bold">
                    choose your food and estimate the calories you need
                </h4>
                <h6 class="text-center pt-2">
                    choose from a lot of healthy recipes provided,or you can add your prefer dishes and save it
                </h6>
            </div>
            <div class="col-lg-5 text-center">
                <img src="{{ asset('img/output-onlinegiftools (1).gif') }}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    {{-- section 6 Articles  -------------------------------------------------------- --}}
    <div class="row pt-3">
        <div class="col">
            <h2 class="text-center" id="articles">Our Experts blogs</h2>
        </div>
    </div>
    <div class="blog_container container">
        <div class="row justify-content-around">
            <div class="col-lg-4 col-md-4 col-sm-4 pt-3 ">
                <div class="card blog_crd" onclick="location.href='/show/{{ $posts[0]->id }}'" style="cursor:pointer;">
                    <img src="{{ asset('img/blog1.jpeg') }}" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h4 class="text-center pt-1" class="card-title" style="color: black">{{ $posts[0]->title }}
                        </h4>
                        <p class="card-text">{{ Str::limit($posts[0]->body, 150) }}</p>
                        {{-- <a href="#" class="btn btn-primary">read more</a> --}}
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">{{ $posts[0]->created_at->format('Y-m-d') }}</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 pt-3">

                <div class="card blog_crd" onclick="location.href='/show/{{ $posts[1]->id }}'"
                    style="cursor:pointer;">
                    <img src="{{ asset('img/blog2.jpg') }}" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h4 class="text-center pt-1" class="card-title" style="color: black">{{ $posts[1]->title }}
                        </h4>
                        <p class="card-text">{{ Str::limit($posts[1]->body, 150) }}</p>
                        {{-- <a href="#" class="btn btn-primary">read more</a> --}}
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">{{ $posts[1]->created_at->format('Y-m-d') }}</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 pt-3 ">
                <div class="card blog_crd" onclick="location.href='/show/{{ $posts[2]->id }}'"
                    style="cursor:pointer;">
                    <img src="{{ asset('img/blog3.jpg') }}" class="card-img-top img-fluid" alt="..."
                        style="">
                    <div class="card-body">
                        <h4 class="text-center pt-1" class="card-title" style="color: black">{{ $posts[2]->title }}
                        </h4>
                        <p class="card-text">{{ Str::limit($posts[2]->body, 200) }}</p>
                        {{-- <a href="#" class="btn btn-primary">read more</a> --}}
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">{{ $posts[2]->created_at->format('Y-m-d') }}</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-5">
            <div class="d-grid gap-2 col-6 mx-auto">
                <a class="btn btn-primary" href="/all articles">see all articles</a>
            </div>
        </div>
    </div>
    {{-- section 7 about us  -------------------------------------------------------- --}}

    <div class="row pt-3">
        <div class="col">
            <h2 class="text-center" id="aboutus">meet our development team</h2>
        </div>
    </div>
    <div class="container ">
        <div class="row">
            <div class="col-lg-7 col-md-7 my-auto">
                <div class="row pt-4 pb-2">
                    <div class="col-4 text-center pb-2 team">
                        <div>
                            <img src="{{ asset('./img/1.jpeg') }}" class="img-fluid" alt=""
                                style="border-radius: 50%;">
                            <h6>
                                Eng. Ahmed Hamada
                            </h6>
                            <h6>
                                Team manger & Flutter Developer
                            </h6>
                        </div>

                    </div>
                    <div class="col-4 text-center pb-2 team">
                        <div>
                            <img src="{{ asset('./img/2.jpeg') }}" class="img-fluid" alt=""
                                style="border-radius: 50%;">
                            <h6>
                                Eng. Mohammed Adel
                            </h6>
                            <h6>
                                Flutter Developer
                            </h6>
                        </div>

                    </div>
                    <div class="col-4 text-center pb-2 team">
                        <div>
                            <img src="{{ asset('./img/3.jpeg') }}" class="img-fluid" alt=""
                                style="border-radius: 50%;">
                            <h6>
                                Eng. Wael Badr
                            </h6>
                            <h6>
                                Flutter Developer
                            </h6>
                        </div>

                    </div>
                    {{-- </div> --}}
                    {{-- <div class="row"> --}}
                    <div class="col-4 text-center pb-2 team">
                        <div>
                            <img src="{{ asset('./img/4.jpeg') }}" class="img-fluid" alt=""
                                style="border-radius: 50%;">
                            <h6>
                                Eng. Hany Adel
                            </h6>
                            <h6>
                                FullStack Developer
                            </h6>
                        </div>

                    </div>
                    <div class="col-4 text-center pb-2 team">
                        <div>
                            <img src="{{ asset('./img/5.jpeg') }}" class="img-fluid" alt=""
                                style="border-radius: 50%;">
                            <h6>
                                Eng. Abadeer Safwat
                            </h6>
                            <h6>
                                Data analysis & Developer
                            </h6>
                        </div>

                    </div>
                    <div class="col-4 text-center pb-2 team">
                        <div>
                            <img src="{{ asset('./img/6.jpeg') }}" class="img-fluid" alt=""
                                style="border-radius: 50%;">
                            <h6>
                                Eng. Mohammed Sayed
                            </h6>
                            <h6>
                                Designer
                            </h6>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 my-auto">
                <img src="{{ asset('./img/output-onlinegiftools.gif') }}" class="rounded-top img-fluid"
                    alt="">
            </div>

        </div>
    </div>
    {{-- section 8 download now --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 my-auto">
                <h1 class="text-center" style="color: red;font-weight: bold;">Fit-Res App</h1>
                <h3 class="text-center pt-5 pb-2">Enjoy in fitness journey with Fit-Res<h3>
                        <h3 class="text-center pt-2 pb-2">Download it now <h3>
                                <div class="text-center pt-2 pb-3">
                                    <a class="btn btn-primary btn-lg" style="margin:10px"
                                        href="https://download1481.mediafire.com/kgal3t9svmcg/ks0fzprse4mgde4/FitRes.apk">DownLoad
                                        Now</a>
                                    <a class="btn btn-primary btn-lg"
                                        href="https://download1515.mediafire.com/cybief1exl0g/d3p2d6k82hcf2aa/FitRes_HIIT.apk">DownLoad
                                        HIIT training tool Now</a>
                                </div>
            </div>
            <div class="col-lg-5 col-md-5 ">
                <img src="{{ asset('./img/10748-removebg-preview.png') }}" class="img-fluid" alt="photo">
            </div>
        </div>
    </div>
@endsection
{{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
    </html> --}}
