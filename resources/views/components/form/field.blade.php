@props([
    'label',
    'error' => ''
])

<div class="form-field">
    <label class="form-field-wrapper">
        @if ($label)
            <span class="form-label">{{ $label }}</span>
        @endif
        {{ $slot }}
    </label>

    @if ($error)
        <div>
            <strong>{{ $error }}</strong>
        </div>
    @endif
</div>
