@props([
    'contacts'
])

@foreach ($contacts as $contact)
    <ul {{ $attributes->merge([ 'class' => 'contact-list' ]) }}>
        <li>
            <x-contacts::contact :contact="$contact" />
        </li>
    </ul>
@endforeach
