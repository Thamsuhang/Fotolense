@extends('Frontend.master.master')
@section('content')
<div class="container">

        <div class="col-md-12">
            <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light ">
                <a class="navbar-brand" href="{{route('index')}}">FotoLense</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{route('index')}}">Home <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('about')}}">About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{route('ourServices')}}">
                                Our Services
                            </a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}">Contact-us</a>
                        </li>

                    </ul>
                </div>
            </nav>
            <header class="masthead">
            <div class="owl-carousel owl-theme">
                <div class="item"><img src="{{asset('img/slider/1.jpg')}}" alt="">
                <div class="contentinslider">
                    <h2>First heading Check</h2>
                    <h4>Unque Slider Test for text slider</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Accusantium atque blanditiis corporis culpa ducimus eum excepturi
                        illum incidunt ipsam ipsum iure nihil nobis numquam, optio, quo,
                        reiciendis reprehenderit similique voluptatibus.</p>
                    <a href="#">More Details</a>
                </div>
                </div>
                <div class="item"><img src="{{asset('img/slider/2.jpg')}}" alt="">
                    <div class="contentinslider">
                        <h2>Second heading Check</h2>
                        <h4>Unque Slider Test for text slider</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusantium atque blanditiis corporis culpa ducimus eum excepturi
                            illum incidunt ipsam ipsum iure nihil nobis numquam, optio, quo,
                            reiciendis reprehenderit similique voluptatibus.</p>
                        <a href="#">More Details</a>
                    </div>
                </div>
                <div class="item"><img src="{{asset('img/slider/3.jpg')}}" alt="">
                    <div class="contentinslider">
                        <h2>Third heading Check</h2>
                        <h4>Unque Slider Test for text slider</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Accusantium atque blanditiis corporis culpa ducimus eum excepturi
                            illum incidunt ipsam ipsum iure nihil nobis numquam, optio, quo,
                            reiciendis reprehenderit similique voluptatibus.</p>
                        <a href="#">More Details</a>
                    </div>
                </div>

                
            </div>
            </header>
            <hr>
            <h1>Fotolense Services</h1>
            <hr>
<div class="row">

    <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <img src="{{asset('img/extra/5.jpg')}}" class="card-img-top rounded-circle" >
                <div class="card-body">
                    <h5 class="card-title">Photo-shoots</h5>
                    <p class="card-text">Take professional photos with us to get some ladies or gents. We don't discriminate</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>

            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('img/extra/7.jpg')}}" class="card-img-top rounded-circle" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Short Films</h5>
                        <p class="card-text">Ever Wanted to create a short movie that competes in the market? Then click below for awesome
                        video making and production for yourself.</p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{asset('img/extra/6.jpg')}}" class="card-img-top rounded-circle" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Music Videos</h5>
                        <p class="card-text">Create A grade international level music videos with our team that your family and your boyfriend enjoys.Even if you are a dude. </p>
                        <a href="#" class="btn btn-primary">Learn More</a>
                    </div>
                </div>
            </div>

        </div>

</div>
</div>
    @stop