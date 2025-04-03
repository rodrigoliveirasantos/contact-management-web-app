@props([
    'contact'
])

<a href="{{ route('contacts.view', ['contact' => $contact->contact]) }}">
    {{ $contact->name }}
</a>
