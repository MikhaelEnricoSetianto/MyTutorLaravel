<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="{{asset('assets/favicon.ico')}}" type="images/x-icon">
    @yield('title')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <div class="container-fluid p-5 text-white text-center" style="background-color: #F4623A;">
        <h1>Tutor Raya</h1>
    </div>

    <div class="container">
        <ul class="nav  justify-content-center">
            @if(!Auth::guest())
            <li class="nav-item">
                <a class="nav-link" href="{{ route('addsubject') }}" style="color: #F4623A;"><i class="fa fa-plus-square" aria-hidden="true"></i> Add Subject</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ URL('logout') }}" style="color: red;"><i class="fa fa-sign-out" aria-hidden="true"></i> Log Out</a>
            </li>
            @else
            @endif
        </ul>
    </div>
    <div class="container mt-8">
        @yield('container')
        <div class="row">
            <div class="col-sm-2">
            </div>
            <div class="col-sm-8 p-3">
                @yield('content')
            </div>
            <div class="col-sm-2">
            </div>
        </div>
    </div>
    <footer class="page-footer text-white" style="background-color: #F4623A; margin-top: 2rem;">
        <div class="footer-copyright text-center py-3">
            Copyright &copy; {{ now()->year }} - Tutor Raya
        </div>
    </footer>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>