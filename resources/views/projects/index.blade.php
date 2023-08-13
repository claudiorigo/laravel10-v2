@extends('layout')

@section('title', 'Laravel 10 | Portfolio')

@section('content')
    <div class="container">
        
        <div class="bd-callout bd-callout-warning bg-white shadow-sm rounded">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h1 class="py-2 display-4 mb-0">{{ __('Portfolio') }}</h1>
                @auth
                    <a class="btn btn-outline-primary" href="{{ route('projects.create') }}">Crear Proyecto</a>        
                @endauth
            </div>
            
            <p class="lead text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe consequatur amet.</p>
        </div>
        
        <ul class="list-group">
            @forelse ($projects as $project)            
                <li class="list-group-item border-0 mb-3 shadow-sm d-flex justify-content-between align-items-center">
                    <a class="lead text-dark font-weight-bold" href="{{ route('projects.show', $project) }}">{{ $project->title }}</a>
                    <span class="text-muted"> ({{ $project->created_at->format('d/m/Y') }})</span>
                </li>
                {{ $projects->links() }}
            @empty        
                <li class="lead list-group-item text-black-50">No hay proyectos para mostrar</li>        
            @endforelse            
        </ul>
    </div>
    
@endsection