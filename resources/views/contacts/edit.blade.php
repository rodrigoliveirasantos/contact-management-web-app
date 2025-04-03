@extends('layouts.site')

@section('title')
    {{ $contact->name }}
@endsection

@section('body')

<header>
    <h1>Editar contato</h1>
</header>

<main>
    <x-contacts::contact-details :contact="$contact" :readonly="false" />
</main>

@endsection
