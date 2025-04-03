@extends('layouts.site')

@section('title')
    {{ $contact->name }}
@endsection

@section('body')

<header>
    <a href="{{ route('contacts.list') }}">Voltar</a>
    <h1>Visualizar contato</h1>
    {{-- @TODO Adicionar URL de editar --}}
    <a href="{{ route('contacts.edit', [ 'contact' => $contact->contact ]) }}">Editar</a>
    <a href="">Apagar</a>
</header>

<main>
    <x-contacts::contact-details
        :contact="$contact"
        :readonly="true"
    />
</main>

@endsection
