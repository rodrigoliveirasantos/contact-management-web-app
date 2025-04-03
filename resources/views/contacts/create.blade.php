@extends('layouts.site')

@section('title')
    Criar contato
@endsection

@section('body')

<header>
    <h1>Criar contato</h1>
</header>

<main>
    <x-contacts::contact-details
        :contact="null"
        :readonly="false"
    />
</main>

@endsection
