@extends('layouts.site')

@section('title')
    {{ $contact->name }}
@endsection

@section('body')

<header>
    <h1>Visualizar contato</h1>
    {{-- @TODO Adicionar URL de editar --}}
    <a href="">Editar</a>
</header>

<main>
    <x-contacts::contact-details
        :contact="$contact"
        :readonly="true"
    />
</main>

@endsection
