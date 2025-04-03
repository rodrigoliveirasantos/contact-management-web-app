@props([
    'contact',
    'readonly' => true
])

{{-- @TODO: Adicionar action --}}
<form @unless($readonly)method="POST" action=""@endif>
    <x-form.field label="Nome">
        <input type="text" name="name" value="{{ $contact->name }}" @readonly($readonly)>
    </x-form.field>
    <x-form.field label="Telefone">
        <input type="text" name="contact" value="{{ $contact->contact }}" @readonly($readonly)>
    </x-form.field>
    <x-form.field label="email">
        <input type="email" name="email" value="{{ $contact->name }}" @readonly($readonly)>
    </x-form.field>
</form>
