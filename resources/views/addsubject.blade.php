@extends('layout')
@section('title')
<title>Add Subject - Tutor Raya</title>
@endsection

@section('container')
<div class="row">

    <div class="col-sm-2">
    </div>

    <div class="col-sm-4 p-3">
        <h1 style="margin-top: 2rem; margin-bottom: 2rem;">
            Add Subject
        </h1>
        <form action="{{ route('addsubjectaction') }}" method="post" enctype="multipart/form-data" id="signup-form" class="signup-form">
            @csrf
            <div class="form-group row" style="margin-bottom: 1rem;">
                <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>

                <div class="col-md-6">
                    <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" autocomplete="title" placeholder="Title" autofocus>

                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row" style="margin-bottom: 1rem;">
                <label for="price" class="col-md-4 col-form-label text-md-right">Price</label>

                <div class="col-md-6">
                    <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" autocomplete="price" placeholder="Price" autofocus>

                    @error('price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <button type="submit" class="form-control px-3 btn-success" style="width: 300px; margin-top: 2rem; margin-bottom: 2rem;">Insert Subject</button>

            <a class="btn text-white" href="{{ route('home') }}" style="text-decoration: none; background-color: red;"><i class="fa fa-sign-in" aria-hidden="true"></i> Cancel</a>
    </div>

    <div class="col-sm-4 p-3">
        <h1 style="color: white; margin-top: 2rem; margin-bottom: 2rem;">
            Add Subject
        </h1>

        <div class="form-group row" style="margin-bottom: 1rem;">
            <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

            <div class="col-md-6">
                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" autocomplete="description" placeholder="Description" autofocus>

                @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row" style="margin-bottom: 1rem;">
            <label for="total_learning_hours" class="col-md-4 col-form-label text-md-right">Total Learning Hours</label>

            <div class="col-md-6">
                <input id="total_learning_hours" type="text" class="form-control @error('total_learning_hours') is-invalid @enderror" name="total_learning_hours" autocomplete="total_learning_hours" placeholder="Total Learning Hours" autofocus>

                @error('total_learning_hours')
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