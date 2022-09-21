<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diomand Calendar</title>
    <link rel="stylesheet" href="{{asset('assets/vendors/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body>
    <header class="foi-header landing-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light foi-navbar">
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{URL::to('/home')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('addevent')}}">Add Event</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="btn btn-danger" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    
            @yield('content')
            <footer class="foi-footer text-white">
       
       </footer>
       <script src="{{asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
   </body>
   
   </html>