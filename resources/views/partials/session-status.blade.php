@if (session('status'))    
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>{{ session('status') }}</strong> por usuario @auth{{ Auth::user()->name }}@endauth.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif