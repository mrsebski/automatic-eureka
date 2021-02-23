<!doctype html>
<html lang="en">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Title -->
        <title>Task Sebastian Laskowski </title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- FavIcon -->
        <!-- <link rel="icon" href="{{ asset('../images/favicon.png') }}" type="image/png" /> -->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- fonts -->
        <link href="https://fonts.googleapis.com/css?family=Bungee&display=swap" rel="stylesheet">
        <!-- jQuery -->
        <script
        src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous"></script>
        <!-- VueJS -->
        <script src="https://unpkg.com/vue"></script>
        <script src="{{ asset('js/app.js')}}" defer></script>
        <link href="{{ asset('css/app.css')}}" rel="stylesheet">
        <!-- Styes for Section -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
        <script src="{{ asset('public/js/navbar_fixed.js')}}"></script>
        </style>
    </head>
    <body>
        <header class="header_area">
            <div class="main_menu">
                <nav class="navbar navbar-expand-lg w-100">
                    <div class="container">
                        <div class="logo">
                            <a class="navbar-brand" href="/">
                                <div class="slash"> bham   </div>
                                <div class="extension"> store </div>
                            </a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                            <div class="row w-100">
                                <div class="col-lg-12 pr-lg-0">
                                    <ul class="nav navbar-nav ml-auto justify-content-end">
                                        <li class="nav-item @if(Request::is(Request()->getPathInfo())) active @endif">
                                            <a class="nav-link" href="{{route('index')}}">Home</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <div class="container" >
            <!-- Example row of columns -->
            <section class="jumbotron text-left mt-5 ">
                <div class="container">
                    <h1 class="jumbotron-heading text-center">Register user</h1>
                    <p class="lead text-muted">
                        curl -X POST https://bham.store/api/register \ <br>
                        -H "Accept: application/json" \ <br>
                        -H "Content-Type: application/json" \ <br>
                        -d '{ <br>
                        "name": "JohnDoe", <br>
                        "firstname": "John", <br>
                        "surname": "Doe", <br>
                        "phone_number": "0789987657", <br>
                        "email": "john@doe.com", <br>
                        "date_of_birth":"1996-05-28", <br>
                        "password": "myPass123", <br>
                        "password_confirmation": "myPass123"}'
                        
                    </p>
                </div>
            </section>
            <section class="jumbotron text-left mt-5 ">
                <div class="container">
                    <h1 class="jumbotron-heading text-center">Login</h1>
                    <p class="lead text-muted">
                        curl -X POST https://bham.store/api/login \ <br>
                        -H "Accept: application/json" \ <br>
                        -H "Content-type: application/json" \ <br>
                        -d "{\"email\": \"john@doe.com\", \"password\": \"myPass123\" }" <br>
                        
                    </p>
                </div>
            </section>
            <section class="jumbotron text-left mt-5 ">
                <div class="container">
                    <h1 class="jumbotron-heading text-center">Update User</h1>
                    <p class="lead text-muted">
                        curl -X PUT https://bham.store/api/users/<_user_id_> \<br>
                        -H "Authorization: Bearer <_api_token_>" \ <br>
                        -H "Accept: application/json" \<br>
                        -H "Content-Type: application/json" \<br>
                        -d '{<br>
                        "name": "JohnDoeTest2", <br>
                        "firstname": "JohnTest2", <br>
                        "surname": "DoeTest", <br>
                        "phone_number": "0789987657", <br>
                        "email": "john@doe.com", <br>
                        "date_of_birth":"1996-05-28",<br>
                        "password": "myPass123",<br>
                        "password_confirmation": "myPass123"}'<br>
                        
                    </p>
                </div>
            </section>
            <section class="jumbotron text-left mt-5 ">
                <div class="container">
                    <h1 class="jumbotron-heading text-center">Delete User</h1>
                    <p class="lead text-muted">
                        curl -X DELETE https://bham.store/api/users/<_user_id_> \ <br>
                        -H "Authorization: Bearer <_api_token_> " \ <br>
                        
                    </p>
                </div>
            </section>
            <section class="jumbotron text-left mt-5 ">
                <div class="container">
                    <h1 class="jumbotron-heading text-center">Get User</h1>
                    <p class="lead text-muted">
                        curl https://bham.store/api/users/<_user_id_> \<br>
                        -H "Authorization: Bearer <_api_token_> " \<br>
                        
                    </p>
                </div>
            </section>
        </div>