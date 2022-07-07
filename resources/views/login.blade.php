<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login - Tutor Raya</title>
    <link rel="icon" href="{{asset('assets/favicon.ico')}}" type="images/x-icon">
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

    <div class="container mt-8">
        <div class="row">

            <div class="col-sm-2">
            </div>

            <div class="col-sm-6 p-3">
                <h1 style="margin-top: 2rem; margin-bottom: 2rem;">
                    Log In
                </h1>
                <form action="{{ route('loginaccount') }}" method="post" class="signin-form">
                    @csrf
                    <div class="form-group row" style="margin-bottom: 1rem;">
                        <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                        <div class="col-md-6">
                            <input id="email" placeholder="Email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                        <div class="col-md-6">
                            <input id="password-field" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" autocomplete="password" autofocus>

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>


                    <button type="submit" class="form-control px-3 btn-success" style="margin-top: 2rem; margin-bottom: 2rem;">Log In</button>

                </form>
                <a class="btn text-white" href="{{ route('signup') }}" style="text-decoration: none; background-color: #F4623A;"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a>
                <a class="btn text-white" href="{{ route('index') }}" style="text-decoration: none; background-color: #F4623A;"><i aria-hidden="true"></i> Back</a>
            </div>
            <div class="col-sm-2">
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