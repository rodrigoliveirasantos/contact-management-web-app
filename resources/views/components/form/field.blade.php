@props([ 'label' ])

<div class="form-field">
    <label class="form-field-wrapper">
        @if ($label)
            <span class="form-label">{{ $label }}</span>
        @endif
        {{ $slot }}
    </label>
</div>
