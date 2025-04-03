@props([
    'contact',
    'readonly' => true
])

{{-- @TODO: Adicionar action --}}
<form @unless($readonly)method="POST" action="{{ route('contacts.edit', [ 'contact' => $contact->contact ]) }}"@endif>
    @csrf

    <x-form.field label="Nome" :error="$errors->first('name')">
        <input
            type="text"
            name="name"
            value="{{ $contact->name }}"
            minlength="5"
            maxlength="255"
            @readonly($readonly)
        >
    </x-form.field>
    <x-form.field label="Telefone" :error="$errors->first('contact')">
        <input
            type="text"
            name="contact"
            value="{{ $contact->contact }}"
            maxlength="9"
            minlength="9"
            @readonly($readonly)
        />
    </x-form.field>
    <x-form.field label="Email" :error="$errors->first('email')">
        <input type="email" name="email" value="{{ $contact->email }}" @readonly($readonly)>
    </x-form.field>

    @error('update')
        <strong>{{ $message }}</strong>
    @enderror

    @unless($readonly)
        <div>
            <a href="{{ route('contacts.view', [ 'contact' => $contact->contact ]) }}">Cancelar</a>
            <button>Enviar</button>
        </div>
    @endif
</form>
