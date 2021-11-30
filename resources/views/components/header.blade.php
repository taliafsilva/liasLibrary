<div>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home.index') }}">Lia's Library</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav me-auto mb-2 mb-md-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home.index') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('livros.index') }}">Livros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('precos.index') }}">Preços</a>
                    </li>
                    </ul>
                    <div class="flex items-center text-white">
                        @if(Auth::check())
                        <div class="mx-2">Olá {{ Auth::user()->name }}!</div>
                        <form class="mx-2" method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Sair') }}
                            </a>
                        </form>
                        @else
                        <a class="mx-2" href="{{ route('login') }}">Acessar</a>
                        <a class="mx-2" href="{{ route('register') }}">Registrar</a>
                        @endif
                    </div>
                </div>
            </div>
        </nav>
    </header>
</div>