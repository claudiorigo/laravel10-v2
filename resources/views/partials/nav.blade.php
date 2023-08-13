<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand text-primary" href="{{ url('/') }}">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="nav nav-pills me-auto">
                <li class="nav-item"><a class="nav-link {{ setActive('home') }}" href="{{ route('home') }}">@lang('Home')</a></li>
                <li class="nav-item"><a class="nav-link {{ setActive('about') }}" href="{{ route('about') }}">@lang('About')</a></li>
                <li class="nav-item"><a class="nav-link {{ setActive('projects.*') }}" href="{{ route('projects.index') }}">@lang('Projects')</a></li>
                <li class="nav-item"><a class="nav-link {{ setActive('contact') }}" href="{{ route('contact') }}">@lang('Contact')</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav nav-pills ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link {{ setActive('login') }}" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link {{ setActive('register') }}" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>                            
                            {{-- {{ auth()->user()->name }} --}}
                            @auth
                                {{ Auth::user()->name }}
                            @endauth
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-primary" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>




<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
