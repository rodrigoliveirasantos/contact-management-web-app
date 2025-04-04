@unless (request()->routeIs('login'))
    <div class="auth-banner">
        @if ($user = auth()->user())
            <div>Usuário: <b>{{ $user->name }}</b></div>

            <form class="wrapper-form" method="POST" action="{{ route('logout') }}">
                @csrf
                <button data-size="sm" data-theme="secondary">Sair</button>
            </form>
        @else
            <div></div>
            <a data-size="sm" data-theme="secondary" href="{{ route('login') }}" class="button">
                Login
            </a>
        @endif
    </div>
@endif
