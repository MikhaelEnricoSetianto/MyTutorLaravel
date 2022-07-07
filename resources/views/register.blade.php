@extends('layout')
@section('title')
<title>Register - Tutor Raya</title>
@endsection

@section('container')
<div class="row">

    <div class="col-sm-2">
    </div>

    <div class="col-sm-4 p-3">
        <h1 style="margin-top: 2rem; margin-bottom: 2rem;">
            Sign Up
        </h1>
        <form action="{{ route('signupaccount') }}" method="post" enctype="multipart/form-data" id="signup-form" class="signup-form">
            @csrf
            <div class="form-group row" style="margin-bottom: 1rem;">
                <label for="fullname" class="col-md-4 col-form-label text-md-right">Full Name</label>

                <div class="col-md-6">
                    <input id="fullname" type="text" class="form-control @error('fullname') is-invalid @enderror" name="fullname" autocomplete="fullname" placeholder="Full Name" autofocus>

                    @error('fullname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row" style="margin-bottom: 1rem;">
                <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number</label>

                <div class="col-md-6">
                    <input id="phone_number" type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" autocomplete="phone_number" placeholder="Phone Number" autofocus>

                    @error('phone_number')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row" style="margin-bottom: 1rem;">

                <label for="state" class="col-md-4 col-form-label text-md-right">State</label>

                <div class="col-md-6">
                    <select class="form-control" name="state" id="state">
                        <!-- <option style="color: #6C757D;">--Select State--</option> -->
                        <option value="Johor">Johor</option>
                        <option value="Kedah">Kedah</option>
                        <option value="Kelantan">Kelantan</option>
                        <option value="Malacca">Malacca</option>
                        <option value="Negeri Sembilan">Negeri Sembilan</option>

                        <option value="Pahang">Pahang</option>
                        <option value="Penang">Penang</option>
                        <option value="Perak">Perak</option>
                        <option value="Perlis">Perlis</option>
                        <option value="Sabah">Sabah</option>

                        <option value="Sarawak">Sarawak</option>
                        <option value="Selangor">Selangor</option>
                        <option value="Trengganu">Trengganu</option>
                        <option value="Kuala Lumpur">Kuala Lumpur</option>
                        <option value="labuan">Labuan</option>

                        <option value="Putrajaya">Putrajaya</option>

                    </select>

                    @error('state')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row" style="margin-bottom: 1rem;">
                <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">Password Confirmation</label>

                <div class="col-md-6">
                    <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Password Confirmation" name="password_confirmation" autocomplete="password_confirmation" autofocus>

                    @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <button type="submit" class="form-control px-3 btn-success" style="width: 300px; margin-top: 2rem; margin-bottom: 2rem;">Sign Up</button>

            <a class="btn text-white" href="{{ route('login') }}" style="text-decoration: none; background-color: #F4623A;"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
            <a class="btn text-white" href="{{ route('index') }}" style="text-decoration: none; background-color: #F4623A;"><i aria-hidden="true"></i> Back</a>

    </div>
    <div class="col-sm-4 p-3">
        <h1 style="color: white; margin-top: 2rem; margin-bottom: 2rem;">
            Sign Up
        </h1>

        <div class="form-group row" style="margin-bottom: 1rem;">
            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

            <div class="col-md-6">
                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" autocomplete="email" placeholder="Email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row" style="margin-bottom: 1rem;">
            <label for="mailing_address" class="col-md-4 col-form-label text-md-right">Mailing Address</label>

            <div class="col-md-6">
                <input id="mailing_address" type="text" class="form-control @error('mailing_address') is-invalid @enderror" name="mailing_address" autocomplete="mailing_address" placeholder="Mailing Address" autofocus>

                @error('mailing_address')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row" style="margin-bottom: 1rem;">
            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" autocomplete="password" autofocus>

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        </form>
    </div>
</div>
@endsection