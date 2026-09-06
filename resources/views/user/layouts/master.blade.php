<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>JOIN CODER</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset ('customer/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset ('customer/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">


    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset ('customer/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset ('customer/css/style.css')}}" rel="stylesheet">

    <!-- {{-- custom css link --}} -->
    <link rel="stylesheet" href="{{asset ('customer/css/custom.css')}}">
</head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show w-100 vh-100 position-fixed top-0 start-0 d-flex align-items-center justify-content-center bg-white bg-opacity-75" style="z-index: 1050;">
            <div class="pulse-loader"></div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar start -->
        <div class="container-fluid fixed-top">
           

            <div class="container px-0">
                <nav class="navbar navbar-light bg-white navbar-expand-xl">
                           <a href="index.html" class="navbar-brand"
                                >
                                <h1 class="text-dark display-6"><img alt="Logo" class="rounded-circle logo__image mb-3" width="50" height="50"
                src="{{ asset('adminProfile/laravel.png') }}">Group 04</h1></a>
                            <button class="navbar-toggler py-1 px-3 border-1" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                                <span class="fa fa-bars"></span>
                            </button>

                            <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                                <div class="navbar-nav mx-auto">
                                    <a href="{{route('userDashboard')}}" class="nav-item nav-link active text-dark fw-semibold">Home</a>
                                    <a href="{{route('shopList')}}" class="nav-item nav-link text-dark fw-semibold">Shop</a>
                                    <a href="{{route('contactUs')}}" class="nav-item nav-link text-dark fw-semibold">Contact</a>
                                    
                                </div>

                                <div class="d-flex align-items-center gap-4">
                                    <a href="{{route('cart')}}" class="text-dark position-relative">
                                        <i class="fa-solid fa-cart-shopping fa-2x"></i>
                                        @if($cartCount > 0)
                                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                {{ $cartCount }}
                                            </span>
                                        @endif
                                    </a>
                                    <a href="{{route('orderList')}}" class="text-dark position-relative">
                                        <i class="fa fa-shopping-bag fa-2x"></i>
                                    </a>

                                    <div class="dropdown">
                                        <a href="#" class="d-flex align-items-center text-dark dropdown-toggle" id="profileDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-user fa-2x me-2"></i>

                                            <span class="fw-semibold">
                                                @if (auth()->user()->name != null)
                                                    {{auth()->user()->name}}
                                                @else
                                                    {{auth()->user()->nickname}}
                                                @endif
                                            </span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end shadow-sm rounded-3">
                                            <li><a class="dropdown-item" href="{{route('userProfileDetails')}}">Profile</a></li>
                                           
                                        </ul>
                                    </div>
                                </div>
                                 <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <input type="submit" value="Logout" class="btn btn-warning rounded-pill px-4">
                                    </form>
                            </div>
                </nav>
            </div>
        </div>

        @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid text-white-50 footer pt-5 mt-5" style="background-color:rgb(9, 9, 71);">
        <!-- Footer -->
<footer class="text-center text-lg-start bg-body-tertiary text-muted">
  <!-- Section: Social media -->
 

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Company name
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
    </div>
    <!-- Copyright End -->

    <!-- JavaScript Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{asset ('customer/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset ('customer/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset ('customer/lib/lightbox/js/lightbox.min.js')}}"></script>
    <script src="{{asset ('customer/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset ('customer/js/main.js')}}"></script>

    <script>
        function loadFile(event) {
            var reader = new FileReader();

            reader.onload = function() {
                var output = document.getElementById('output');

                output.src = reader.result;
            }
            reader.readAsDataURL(event.target.files[0])
        }


    </script>
    </body>

    @yield('js-section')

</html>
