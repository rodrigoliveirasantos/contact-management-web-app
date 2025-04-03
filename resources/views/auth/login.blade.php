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
            <input type="email" name="email" value="{{ old('email') }}"/>
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
            <input type="checkbox" name="remember" value="1" />
            Lembrar de mim
        </label>
    </div>
    @if ($errors->any())
        <div>
            <strong>{{ $errors->first() }}</strong>
        </div>
    @endif
    <div>
        <button>
            Fazer login
        </button>
    </div>
</form>
@endsection
