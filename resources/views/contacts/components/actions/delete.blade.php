@props([
    'contact'
])

<form
    class="wrapper-form"
    method="POST"
    action="{{ route('contacts.delete', [ 'contact' => $contact->contact ]) }}"
    onsubmit="return confirm('Você tem certeza de que gostaria de apagar o contato?')"
>
    @csrf
    <button {{ $attributes->merge([ 'data-theme' => 'danger' ]) }}>Apagar</button>
</form>
