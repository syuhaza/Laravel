@extends('layouts.app-master')

@section('content')
    <div class="A" style="margin-top: 10rem;">
        @auth
        <h1>Dashboard</h1>
        <p class="lead">Only authenticated users can access this section.</p>
        <a class="btn btn-lg btn-primary" href="https://codeanddeploy.com" role="button">View more tutorials here &raquo;</a>
        @endauth

        @guest
        <div class="float-xl-end me-5">
        <img src="images\inven.png" alt="centered image" style="width: 35rem; height: 20rem;">
        </div>
        <h1 class="ms-5">Welcome</h1>
        <p class="mt-xxl-auto ms-5" style="font-size: 20px;">Bla bla bla bla</p>
        <div class="text-start">
        <a href="{{ route('register.perform') }}" class="btn btn-outline-dark me-2 px-5 me-3 fw-bolder ms-5 mt-4">Get Start Here</a>
        </div>
        @endguest
    </div>
@endsection