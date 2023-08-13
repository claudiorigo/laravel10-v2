@extends('layout')

@section('title', 'Laravel 10 | Contact')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-8 mx-auto">

                <div class="bd-callout bd-callout-warning bg-white shadow-sm rounded">                    
                    <h1 class="py-2 display-4">{{ __('Contact') }}</h1>
                </div>

                @include('partials.session-status')
                <form class="bg-white shadow rounded py-3 px-4" action="{{ route('messages.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nombre</label>                
                        <input id="name" class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror" name="name" type="text" placeholder="Nombre de usuario" value="{{ old('name') }}">
                        @error('name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror

                        <label for="email">Correo Eléctronico</label>
                        <input id="email" class="form-control bg-light shadow-sm @error('email') is-invalid  @else border-0 @enderror" name="email" type="email" placeholder="usuario@correo.com" value="{{ old('email') }}">
                        @error('email')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror

                        <label for="subject">Asunto</label>
                        <input id="subject" class="form-control bg-light shadow-sm @error('subject') is-invalid  @else border-0 @enderror" name="subject" type="text" placeholder="Asunto del correo" value="{{ old('subject') }}">
                        @error('subject')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror

                        <label for="content">Mensaje</label>                
                        <textarea id="content" class="form-control bg-light shadow-sm @error('content') is-invalid  @else border-0 @enderror" name="content" cols="20" rows="4" placeholder="Escribe tu mensaje">{{ old('content') }}</textarea>
                        @error('content')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                        <hr>
                        <button class="btn btn-primary btn-lg btn-block d-grid gap-2 col-6 mx-auto">Enviar</button>
                        <a class="btn btn-lg btn-link btn-block d-grid gap-2 col-6 mx-auto d-flex align-items-center justify-content-center text-decoration-none"  href="{{ route('home') }}"> 
                            Inicio
                            <li class="fa fa-home"></li>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection