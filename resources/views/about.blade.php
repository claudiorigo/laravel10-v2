@extends('layout')

@section('title', 'Laravel 10 | About')

@section('content')
    <h1></h1>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 mb-4">
                <img class="img-fluid mb-4" src="image/about.svg" alt="Quién Soy">
            </div>
            <div class="col-12 col-lg-6">
                <h1 class="display-4 text-primary">{{ __('About') }}</h1>
                <p class="lead text-secundary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt architecto sed dolorem. Quas dolores quam vero consequuntur itaque, voluptates fugit, numquam adipisci, possimus ad veniam totam sint laborum aperiam! Nulla?</p>                
                <div class="d-grid gap-2">
                    <a class="btn btn-lg btn-primary" href="{{ route('contact') }}">Contáctanos</a>
                    <a class="btn btn-lg btn-outline-primary" href="{{ route('projects.index') }}">Portafolio</a>
                </div>
            </div>            
        </div>
    </div>
    
@endsection