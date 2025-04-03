@props([
    'contacts'
])

<ul {{ $attributes->merge([ 'class' => 'contact-list' ]) }}>
    @foreach ($contacts as $contact)
        <li>
            <x-contacts::contact :contact="$contact" />
        </li>
    @endforeach
</ul>
