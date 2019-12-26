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

        </div>

    </div>
@stop