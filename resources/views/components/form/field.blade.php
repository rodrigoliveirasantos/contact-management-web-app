@props([
    'label',
    'error' => ''
])

<div class="form-field">
    <label class="form-field-wrapper">
        @if ($label)
            <span class="form-field-label">{{ $label }}</span>
        @endif
        {{ $slot }}
    </label>

    @if ($error)
        <x-error>{{ $error }}</x-error>
    @endif
</div>
