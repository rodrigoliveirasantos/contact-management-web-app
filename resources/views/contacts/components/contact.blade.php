@props([
    'contact'
])

<a
    class="contact"
    href="{{ route('contacts.view', ['contact' => $contact->contact]) }}"
>
    {{ $contact->name }}
</a>
