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
<div class="Container">
            <form class="contact">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputName">Name</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                </div>
                <div class="form-group">
                    <label for="inputAddress2">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="inputState" class="form-control">
                            <option selected>Choose..</option>
                            <option>State 1</option>
                            <option>State 2</option>
                            <option>State 3</option>
                            <option>State 4</option>
                            <option>State 5</option>
                            <option>State 6</option>
                            <option>State 7</option>

                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip">Zip</label>
                        <input type="text" class="form-control" id="inputZip">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputInquiry">Inquiry</label>
                    <textarea class="form-control" id="inputInquiry" rows="3" placeholder="Tell us your inquiry?"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

    <div id="googleMap" style="width:100%;height:400px;"></div>

        </div>
        </div>
    </div>
@stop