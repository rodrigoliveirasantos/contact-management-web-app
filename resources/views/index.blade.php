@extends('layouts.site')

@section('body')

<header>
    <h1>Lista de contatos</h1>
</header>

<main>
    <x-contacts::list :contacts="$contacts" />
</main>

@endsection
