@extends('layouts.site')

@section('title')
    Login
@endSection

@section('body')
<header>
    <h1>Fazer login</h1>
</header>

<main>
    <form method="POST" action="{{ route('login') }}" class="center">
        @csrf

        <x-form.field label="Email" :error="$errors->first('email')" class="row">
            <input type="email" name="email" value="{{ old('email') }}"/>
        </x-form.field>

        <x-form.field label="Senha" :error="$errors->first('password')" class="row">
            <input type="password" name="password" />
        </x-form.field>

        <x-form.field label="Lembrar de mim" class="row">
            <input type="checkbox" name="remember" value="1" />
        </x-form.field>

        <div class="button-group">
            <button>
                Fazer login
            </button>
        </div>
    </form>
</main>
@endsection
