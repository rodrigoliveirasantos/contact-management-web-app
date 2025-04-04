@extends('layouts.site')

@section('title')
    {{ $contact->name }}
@endsection

@section('body')

<header>
    <h1>Visualizar contato</h1>
</header>

<main>
    <x-contacts::contact-details
        :contact="$contact"
        :readonly="true"
    />

    <div class="button-group">
        <a class="button" data-theme="secondary" href="{{ route('contacts.list') }}">Voltar</a>
        <x-contacts::actions.delete :contact="$contact" />
        <a class="button" href="{{ route('contacts.edit', [ 'contact' => $contact->contact ]) }}">Editar</a>
    </div>

    @error('delete')
        <x-error>{{ $message }}</x-error>
    @enderror
</main>

@endsection
