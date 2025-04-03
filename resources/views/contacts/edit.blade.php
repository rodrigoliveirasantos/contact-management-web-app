@extends('layouts.site')

@section('title')
    {{ $contact->name }}
@endsection

@section('body')

<header>
    <h1>Editar contato</h1>
    {{-- @TODO Adicionar URL de editar --}}
    <a href="">Editar</a>
    <a href="">Apagar</a>
</header>

<main>
    <x-contacts::contact-details :contact="$contact" :readonly="false" />
</main>

@endsection
