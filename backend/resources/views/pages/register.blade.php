@extends('layout/header')

@section('pageName', 'Register')

@section('page-content')

    <div class="container con_wth mt-5  p-5">

        <form action='{{ route('addUser')}}' method="POST">
            @csrf
            <div class="mb-3">
                <label for="FN" class=" form-label">First Name</label>
                <input type="text" name="firstName"  class="form-control mb-4 @error('firstName') is-invalid @enderror" id="FN" value="{{ old('firstName') }}">
                @error('firstName')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror

                <label for="LN" class="form-label">Last Name</label>
                <input type="text" name="lastName"  class="form-control mb-4 @error('lastName') is-invalid @enderror" id="LN" value="{{ old('lastName') }}">
                @error('lastName')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror

                <label for="UN" class="form-label">User Name</label>
                <input type="text" name="userName"  class="form-control mb-4 @error('userName') is-invalid @enderror" id="UN" value="{{ old('userName') }}">
                @error('userName')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror

                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="userEmail" class="form-control mb-4 @error('userEmail') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('userEmail') }}">
                @error('userEmail')
                    <div class="alert alert-danger">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="userPassword" class="form-control mb-4 @error('lastName') is-invalid @enderror" id="exampleInputPassword1" value="{{ old('userPassword') }}">
            </div>
            @error('userPassword')
            <div class="alert alert-danger">
                {{$message}}
            </div>
            @enderror

            <button type="submit" name="submit" class="btn btn-primary">Register</button>
        </form>

    </div>

@endsection


