@extends('layouts.site')

@section('title')
    {{ $contact->name }}
@endsection

@section('body')

<header>
    <a href="{{ route('contacts.list') }}">Voltar</a>
    <h1>Visualizar contato</h1>
</header>

<main>
    <x-contacts::contact-details
        :contact="$contact"
        :readonly="true"
    />
</main>

<footer>
    <a href="{{ route('contacts.edit', [ 'contact' => $contact->contact ]) }}">Editar</a>
    <form method="POST" action="{{ route('contacts.delete', [ 'contact' => $contact->contact ]) }}">
        @csrf
        <button>Apagar</button>
    </form>

    @error('delete')
        <strong>{{ $message }}</strong>
    @enderror
</footer>

@endsection
