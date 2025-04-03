<a {{ $attributes->merge([ 'class' => 'back-link' ]) }}>
    @if ($slot->isEmpty())
        Voltar
    @else
        {{ $slot }}
    @endif
</a>
