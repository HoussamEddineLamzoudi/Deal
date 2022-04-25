@extends('layout/header')

@section('pageName', 'Login')

@section('page-content')

<div class="container mt-4 p-4">

    <div class="con_wth col-12">

        <form action='/auth' method="post">
            @csrf
            @if(session('status'))
                <div class="alert alert-danger">
                    {{session('status')}}
                </div>
            @endif
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="userEmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="userPassword" class="form-control" id="exampleInputPassword1">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">login</button>
        </form>
    </div>
</div>

@endsection


