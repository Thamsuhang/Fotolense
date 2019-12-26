@section('footer')
    <hr>
<div class="col-md-12">
    <!-- Footer -->
    <footer class="page-footer font-small mdb-color lighten-3 pt-4">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Grid row -->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

                    <!-- Content -->
                    <h5 class="font-weight-bold text-uppercase mb-4">Footer Content</h5>
                    <p>Here you can use rows and columns to organize your footer content.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit amet numquam iure provident voluptate
                        esse
                        quasi, veritatis totam voluptas nostrum.</p>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

                    <!-- Links -->
                    <h5 class="font-weight-bold text-uppercase mb-4">About</h5>

                    <ul class="list-unstyled">
                        <li>
                            <p>
                                <a href="#!">PROJECTS</a>
                            </p>
                        </li>
                        <li>
                            <p>
                                <a href="#!">ABOUT US</a>
                            </p>
                        </li>
                        <li>
                            <p>
                                <a href="#!">BLOG</a>
                            </p>
                        </li>
                        <li>
                            <p>
                                <a href="#!">AWARDS</a>
                            </p>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

                    <!-- Contact details -->
                    <h5 class="font-weight-bold text-uppercase mb-4">Address</h5>

                    <ul class="list-unstyled">
                        <li>
                            <p>
                                <i class="fas fa-home mr-3"></i> Kathmandu, Kapan Budhanilkanta 10, US</p>
                        </li>
                        <li>
                            <p>
                                <i class="fas fa-envelope mr-3"></i> fotolense@gmail.com</p>
                        </li>
                        <li>
                            <p>
                                <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                        </li>
                        <li>
                            <p>
                                <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                        </li>
                    </ul>

                </div>
                <!-- Grid column -->

                <hr class="clearfix w-100 d-md-none">

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

                    <!-- Social buttons -->
                    <h5 class="font-weight-bold text-uppercase mb-4">Follow Us</h5>

                    <!-- Facebook -->
                    <a type="button" class="btn-floating btn-fb">
                        <i class="fab fa-facebook-square"></i>
                    </a>
                    <!-- Twitter -->
                    <a type="button" class="btn-floating btn-tw">
                        <i class="fab fa-twitter-square"></i>
                    </a>
                    <!-- Google +-->
                    <a type="button" class="btn-floating btn-gplus">
                        <i class="fab fa-google-plus-g"></i>
                    </a>



                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
            <a href="#"> Fotolense.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->
</div>


    <script type="text/javascript" src="{{ URL::asset('bootstrap/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('bootstrap/js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('bootstrap/js/owl.carousel.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('bootstrap/js/slider.js') }}"></script>

    <script>
        function myMap() {
            var mapProp= {
                center:new google.maps.LatLng(27.727241, 85.350000),
                zoom:5,
            };
            var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
            var marker = new google.maps.Marker({position: myCenter});

            marker.setMap(map);
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMNC13q-kh3rFSO7u7mFJ4-2wmskSxtJo&callback=myMap"></script>

</body>
</html>
@endsection