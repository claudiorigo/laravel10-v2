@extends('layout')

@section('title', $project->title)

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-8 mx-auto">
                <div class="bd-callout bd-callout-warning bg-white shadow-sm rounded">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h1 class="py-2 display-4 mb-0">{{ __('Portfolio') }}-{{ $project->id }}</h1>                        
                        <a class="btn btn-outline-primary" href="{{ route('projects.index') }}">← Regresar</a>
                    </div>
                    <h6 class="text-secondary mb-0">{{ $project->created_at->format('Y-m-d') }}</h6>
                </div>
                <div class="bg-white shadow rounded py-3 px-4">
                    <h1>{{ $project->title }}</h1>
                    <p class="lead text-secondary">{{ $project->description }}</p>
                    <span class="text-muted">{{ $project->created_at->diffForHumans() }}</span><br>
                    @auth                        
                        <div class="btn-group btn-group-sm mt-4">
                            <a class="btn btn-outline-primary" href="{{ route('projects.edit', $project) }}">Editar <i class="far fa-edit"></i></a>
                            <a class="btn btn-outline-danger" href="#" onclick="document.getElementById('delete-project').submit()">Eliminar <i class="far fa-trash-alt"></i></a>
                        </div>
                        <form class="d-none" id="delete-project" action="{{ route('projects.destroy', $project) }}" method="POST">
                            @csrf @method('DELETE')                           
                        </form>
                    @endauth
                </div>                
            </div>
        </div>
    </div>
@endsection