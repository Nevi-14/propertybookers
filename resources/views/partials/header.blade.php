<!doctype html>

<html lang="en">



<head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"

        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">



    <title>{{config('app.name')}}</title>

    <!-- Fonts -->

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->

    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <link rel="stylesheet" href="{{asset('css/welcome.css')}}">



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <script src="{{asset('js/parallax.min.js')}}"></script>

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Font Awesome-->



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

</head>



<body>



    <!-- STARTS MAIN CONTAINER  -->





    <div id="page-container">



    <!-- STARTS NAVBAR  -->

    <nav id="new-top" class="navbar  navbar-expand-lg  pl-0 flex-nowrap  navbar-new-top">

           <span class="center-main p-0 order-0 order-lg-1">PROPERTYBOOKERS</span>

            <div class="w-100  order-1 order-lg-0">   <img id="nav-logo" class="zoom"

                src="https://drive.google.com/thumbnail?id=1hyJtix697a1KETKZvcp9f0E0zrJfZSyN"

                class="d-inline-block align-top" alt="" loading="lazy"></div>

            <ul class="navbar-nav flex-row order-2 order-md-1 ">



            @if (Route::has('login'))

                    @auth

                    <li class="nav-item mr-2">

                    <a href="{{ url('/home') }}" class="nav-link header-btn text-white text-center"><i class="fas fa-angle-double-right mr-1"></i>System</a>

                </li>



                    @else

                <li class="nav-item mr-2">

                    <a href="{{ url('/login') }}" class="nav-link header-btn text-white text-center"><i class="fas fa-user mr-1"></i>User login</a>

                </li>

                <li class="nav-item">

                    <a href="{{ url('client/login') }}" class="nav-link header-btn-2  text-white text-center"><i class="fas fa-user-tie mr-1"></i>Client login</a>

                </li>

                @endauth

                @endif

            </ul>

            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbar2">

                <span class="navbar-toggler-icon"></span>

            </button>

        </nav>

       

        <nav class="navbar  navbar-expand navbar-new-bottom">

            <div class="navbar-collapse collapse pt-2 pt-md-0" id="navbar2">



                <ul class="navbar-nav w-100 justify-content-center px-3">



                

                  

                @if (request()->is('/'))

                    <li class="nav-item ">

                        <a class="nav-link active " href="{{ url('/') }}">HOME <span

                                class="sr-only">(current)</span></a>

                    </li>

                    @else

                    <li class="nav-item ">

                        <a class="nav-link  " href="{{ url('/') }}">HOME <span class="sr-only">(current)</span></a>

                    </li>



                    @endif





                    @if (request()->is('services'))

                    <li class="nav-item">

                        <a class="nav-link active" href="{{ url('services') }}">SERVICES</a>

                    </li>

                    @else

                    <li class="nav-item">

                        <a class="nav-link " href="{{ url('services') }}">SERVICES</a>

                    </li>

                    @endif





                    @if (request()->is('about'))



                    <li class="nav-item">

                        <a class="nav-link active" href="{{ url('about') }}">ABOUT US</a>

                    </li>





                    @else





                    <li class="nav-item">

                        <a class="nav-link" href="{{ url('about') }}">ABOUT US</a>

                    </li>

                    @endif





                    @if (request()->is('rates'))

                    <li class="nav-item ">

                        <a class="nav-link active" href="{{ url('rates') }}">RATES <span

                                class="sr-only">(current)</span></a>

                    </li>

                    @else

                    <li class="nav-item ">

                        <a class="nav-link" href="{{ url('rates') }}">RATES <span class="sr-only">(current)</span></a>

                    </li>

                    @endif





                    @if (request()->is('contact'))





                    <li class="nav-item">

                        <a class="nav-link active" href="{{ url('contact') }}">CONTACT</a>

                    </li>

                    @else





                    <li class="nav-item">

                        <a class="nav-link" href="{{ url('contact') }}">CONTACT</a>

                    </li>

                    @endif





                </ul>

            </div>

        </nav>





        <!-- ENDS NAVBAR -->