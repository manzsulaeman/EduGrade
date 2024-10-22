@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="jumbotron bg-light p-5 rounded-lg">
        <h1 class="display-4">Welcome to Test Laravel 11 !</h1>
        <p class="lead">We are dedicated to providing the best services in the industry.</p>
        <hr class="my-4">
        <p>Explore more about what we offer and how we can help you achieve your goals.</p>
        <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </div>

    <section class="mt-5">
        <h2>Our Services</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/services1.png') }}" class="card-img-top" alt="Service 1">
                    <div class="card-body">
                        <h5 class="card-title">Service 1</h5>
                        <p class="card-text">Description of service 1.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/services2.jpeg') }}" class="card-img-top" alt="Service 2">
                    <div class="card-body">
                        <h5 class="card-title">Service 2</h5>
                        <p class="card-text">Description of service 2.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="{{ asset('images/services3.png') }}" class="card-img-top" alt="Service 3">
                    <div class="card-body">
                        <h5 class="card-title">Service 3</h5>
                        <p class="card-text">Description of service 3.</p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-5">
        <h2>About Us</h2>
        <p>Test Laravel 11  is a leading provider of quality services and solutions. We have a long history of success and are dedicated to helping our clients achieve their objectives.</p>
        <a href="#" class="btn btn-secondary">More About Us</a>
    </section>
@endsection
