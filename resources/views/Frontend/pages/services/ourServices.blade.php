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
            <class class="sidebar ">
                <div class="row animated pulse" >
                    <div class="col-4">
                        <div class="list-group" id="list-tab" role="tablist">
                            <a class="list-group-item list-group-item-action active" id="list-weddings-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Weddings</a>
                            <a class="list-group-item list-group-item-action" id="list-PS-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">PhotoShoots</a>
                            <a class="list-group-item list-group-item-action" id="list-MV-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Music Videos</a>
                            <a class="list-group-item list-group-item-action" id="list-VFX-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">VFX</a>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-weddings-list">
                                <div class="jumbotron jumbotron-fluid" style="border-radius:10px; background-color: transparent">
                                    <div class="container">
                                        <h1 class="display-4">FotoLense Weddings</h1>
                                        <img class="animated pulse wedimg" src="{{asset('img/extra/wed.jpg')}}">
                                        <p class="lead">
                                            Wedding videography and photography is just a part of what we do.
                                            And we DO love to film weddings!
                                            We are based in Lisbon, Portugal and work on projects all around the world.
                                            Every day we improve our skills and get new experience outside wedding industry while working with brands, companies and artists. We are passionate about giving back, support mental health and care about the environment. In our portfolio you can see that we work with companies and innovators that are producing sustainable products and helping people to improve their lives. We are proud to be a part of a community that chose a path to create a better future.
                                            Our style is inspired by movies, Netflix TV shows, latest cinematography and photography trends
                                            and classic cinematic approaches. We believe that our experience and fresh eye helps us to
                                            make a difference in wedding photography and videography. We are here to tell YOUR story and create a piece of ART for you.
                                        </p>
                                        <a href="#"><button type="button" class="btn btn-outline-primary">Book Us? </button></a>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-PS-list">
                                <div class="jumbotron jumbotron-fluid" style="border-radius:10px; background-color: transparent">
                                    <div class="container">
                                        <h1 class="display-4">FotoLense PhotoShoots</h1>
                                        <img class="animated pulse wedimg" src="{{asset('img/extra/PS.jpg')}}">
                                        <p class="lead">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est illum inventore omnis quisquam rem repellat tenetur ullam.
                                            Amet delectus ea enim id ipsam, optio perferendis quasi quidem saepe veritatis vero.
                                        </p>
                                        <a href="#"><button type="button" class="btn btn-outline-primary">Book Us? </button></a>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-MV-list">
                                <div class="jumbotron jumbotron-fluid" style="border-radius:10px; background-color: transparent">
                                    <div class="container">
                                        <h1 class="display-4">FotoLense Music Videos</h1>
                                        <img class="animated pulse wedimg" src="{{asset('img/extra/MV.jpg')}}">
                                        <p class="lead">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam culpa eaque error fugiat, id maiores nam necessitatibus sit?
                                            Accusantium aliquid distinctio et incidunt ipsa labore laborum necessitatibus saepe sequi veniam!
                                        </p>
                                        <a href="#"><button type="button" class="btn btn-outline-primary">Book Us? </button></a>

                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-VFX-list">
                                <div class="jumbotron jumbotron-fluid" style="border-radius:10px; background-color: transparent">
                                    <div class="container">
                                        <h1 class="display-4">FotoLense Visual Effects</h1>
                                        <img class="animated pulse wedimg" src="{{asset('img/extra/VFX.jpg')}}">
                                        <p class="lead">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, atque consequuntur culpa cum cumque ducimus,
                                            eaque id labore non odio omnis placeat provident quae quibusdam quod tenetur totam vitae voluptatum!
                                        </p>
                                        <a href="#"><button type="button" class="btn btn-outline-primary">Book Us? </button></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </class>
        </div>

    </div>
@stop
