@props([
    'contact' => null,
    'readonly' => true
])

@php
    $action = match(true) {
        ($readonly) => '',
        ($contact !== null) => route('contacts.edit', [ 'contact' => $contact->contact ]),
        default => route('contacts.create')
    };

    $cancel = match(true) {
        ($contact !== null) => route('contacts.view', [ 'contact' => $contact->contact ]),
        default => route('contacts.list')
    };
@endphp

{{-- @TODO: Adicionar action --}}
<form @unless($readonly)method="POST" action="{{ $action }}"@endif>
    @csrf

    <x-form.field label="Nome" :error="$errors->first('name')">
        <input
            type="text"
            name="name"
            value="{{ $contact?->name }}"
            minlength="5"
            maxlength="255"
            @readonly($readonly)
        >
    </x-form.field>
    <x-form.field label="Telefone" :error="$errors->first('contact')">
        <input
            type="text"
            name="contact"
            value="{{ $contact?->contact }}"
            maxlength="9"
            minlength="9"
            @readonly($readonly)
        />
    </x-form.field>
    <x-form.field label="Email" :error="$errors->first('email')">
        <input type="email" name="email" value="{{ $contact?->email }}" @readonly($readonly)>
    </x-form.field>

    @error('update')
        <strong>{{ $message }}</strong>
    @enderror

    @unless($readonly)
        <div>
            <a href="{{ $cancel }}">Cancelar</a>
            <button>Enviar</button>
        </div>
    @endif
</form>
