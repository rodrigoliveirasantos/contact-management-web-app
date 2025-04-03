@extends('layouts.site')

@section('title')
    Login
@endSection

@section('body')
<form method="POST" action="{{ route('login') }}">
    @csrf

    <div>
        <label>
            Email
            <input type="email" name="email" />
        </label>
    </div>
    <div>
        <label>
            Senha
            <input type="password" name="password" />
        </label>
    </div>
    <div>
        <label>
            <input type="checkbox" name="remember" />
            Lembrar de mim
        </label>
    </div>
    @error('email')
        <div>
            <strong>{{ $message }}</strong>
        </div>
    @enderror
    <div>
        <button>
            Fazer login
        </button>
    </div>
</form>
@endsection
