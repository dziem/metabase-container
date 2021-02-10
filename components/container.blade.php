@props([
    'url' => null,
])

<div style="width: 100%">
    @if ($url != null)
            <iframe
            src="{{ $url }}"
            frameborder="0"
            width="1000"
            height="800"
            allowtransparency
            style="margin: auto;display: block;"
        ></iframe>
    @else
        <h1>No dashboard url</h1>
    @endif
</div>
