<div class="form-group lead text-primary">
    @csrf
    <label for="title">Título del proyecto</label>                
    <input type="text" name="title" id="title" class="form-control bg-light shadow-sm @error('title') is-invalid @else border-0 @enderror" placeholder="Nombre de proyecto" value="{{ old('title', $project->title) }}">
    
    <label for="url">URL del proyecto</label>                
    <input type="text" name="url" id="url" class="form-control bg-light shadow-sm @error('url') is-invalid @else border-0 @enderror" placeholder="url Amigable" value="{{ old('url', $project->url) }}">
    
    <label for="description">Descripción del proyecto</label>                
    <textarea name="description" id="description" class="form-control bg-light shadow-sm @error('description') is-invalid  @else border-0 @enderror" cols="20" rows="4" placeholder="Descripción del proyecto">{{ old('description', $project->description) }}</textarea>
    <hr>
    <button class="btn btn-primary btn-lg btn-block d-grid gap-2 col-6 mx-auto mb-1">{{ $btnText }}</button>
    <a class="btn btn-lg btn-outline-primary d-grid gap-2 col-6 mx-auto" href="{{ route('projects.index') }}">Cancelar</a>
    
</div>