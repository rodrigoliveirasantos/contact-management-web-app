@extends('layouts.site')

@section('body')

<header>
    <h1>Lista de contatos</h1>
</header>

<main>
    <a href="{{ route('contacts.create') }}">Criar contato</a>
    <x-contacts::list :contacts="$contacts" />
</main>

@endsection
