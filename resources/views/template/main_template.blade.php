<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
        h2 {
            font-size: 24px;
        }
        /* unvisited link */
        .navi:link {
            color: white;
        }

        /* visited link */
        .navi:visited {
            color: white;
        }

        /* mouse over link */
        .navi:hover {
            color: white;
            background-color: black;
        }

        /* selected link */
        .navi:active {
            color: white;
            background-color: black;
        }
    </style>

    @yield('head')
</head>
<body>
    <!-- div satu screen -->
    <div class="container-fluid p-0 m-0">

        <!-- jumbotron -->
        <div class="jumbotron jumbotron-fluid text-center" style="background-color: rgba(238,238,238,255);">
            <div class="container">
                <h1 class="p-1 display-3">Wonderful Journey</h1>
                <p class="p-1" style="font-size:20px">Blog of Indonesia Tourism</p>
            </div>
        </div>

        <!-- navbar -->
        <div class="container px-0 mb-4">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded mx-2">

                <!-- klo screen small jadi collapse navbarnya -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- left links -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active mr-2">
                            <a class="nav-link" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item dropdown mr-2">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Categories
                            </a>
                            <div class="dropdown-menu mt-1 bg-dark border border-dark" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item navi" href="/category/1">Beach</a>
                                <a class="dropdown-item navi" href="/category/2">Mountain</a>
                            </div>
                        </li>
                        <li class="nav-item active mr-2">
                            <a class="nav-link" href="{{ url('/about') }}">About Us</a>
                        </li>
                    </ul>
                    <!-- sign up log in -->
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/signup') }}">Sign Up</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/login') }}">Log In</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        @yield('container')

    </div>
</body>
</html>